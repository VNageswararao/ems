<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_controller extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        
        $this->load->model('Common_model');
      
    }

    public function getsearchval()
  {
    $this->form_validation->set_rules('getid', 'Patient Search Details', 'trim|required|min_length[1]|max_length[1]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->issetcheckval($var_array);
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getpatientdetailssearch($getid,$this->session->userdata('office_id'));
          if($getresult)
          {
            $id=$getid;
            $selbox='<option value="">Select Details</option>';
            if($id==1){$chk='mrdno';}elseif ($id==2){$chk='mobileno';}elseif ($id==3){$chk='address';}elseif ($id==4){$chk='barcode';}
            
             foreach($getresult as $data)
             {
              $selbox.='<option value="'.$data['patient_registration_id'].'">'.$data[$chk].'  - '.$data['pateint_name'].'</option>';
             }
            echo json_encode(array('msg' =>$selbox,'error'=>'','error_message' =>''));
          }
          else
          {
              echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
          }
        }
        else
        {
                echo json_encode(array('msg'=>'','error' =>'No Data Found','error_message' =>''));
        }
      }
      else
      {
           echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
      }
  }

  public function getparticulars()
  {
    $this->form_validation->set_rules('getid', 'Charge Type', 'trim|required|min_length[1]|max_length[100000]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($getid,$this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->getcheckingchargeslist($getid,$this->session->userdata('office_id'));
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getopdpanelmodel($getid,$this->session->userdata('office_id'));
          if($getresult)
          {
            $idval=$getid;
            $selbox='<option>Select Particulars</option>';
            if($idval==1){
                $charges='opdcharge_id';
              }
              elseif($idval==2){
                $charges='ipdcharge_id';
              }
              elseif($idval==3){
                $charges='laser_id';
              }
              elseif($idval==4){
                $charges='injection_id';
              }
              elseif($idval==5){
                $charges='investigation_id';
              }
            
             foreach($getresult as $data)
             {
              $selbox.='<option value="'.$data[$charges].'">'.$data['name'].'  '.$data['amount'].'</option>';
             }
            echo json_encode(array('msg' =>$selbox,'error'=>'','error_message' =>''));
          }
          else
          {
              echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
          }
        }
        else
        {
                echo json_encode(array('msg'=>'','error' =>'No Data Found','error_message' =>''));
        }
      }
      else
      {
           echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
      }
  }

  public function getpatientdetails()
  {
      $this->form_validation->set_rules('getid', 'Patient ID', 'trim|required|min_length[1]|max_length[10000]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($getid,$this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->issetcheckpateintid($var_array);
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getpatapphistorydetails($getid,$this->session->userdata('office_id'));
          $getresultbil_patient=$this->Common_model->gethistorybillingtable($getid,$this->session->userdata('office_id'));
          if($getresult || $getresultbil_patient)
          {
            $sl=1;
            $getmaster=$this->Common_model->getpatientMasterdetails($var_array);
            $html='<div class="row">
                          <div class="col-md-6">
                              <h3 class="text-danger" style="font-weight: bold;">Patient Name:'.$getmaster[0]['fname'].' '.$getmaster[0]['lname'].'</h3>
                          </div>

                          <div class="col-md-6">
                              <h3 class="text-danger" style="font-weight: bold;float: right;">MRD NO:'.$getmaster[0]['mrdno'].'</h3>
                          </div>
                      </div><div class="row accordion" id="accordion"  style="cursor: pointer;">
 <div class="collapsed" data-toggle="collapse" href="#collapseOne" style="background: #28d094;text-align: center;color: #fff;    width: 100%;">
                                                    <a class="card-title">Pateint History</a>
                              </div>
                              <div class="table-responsive collapse" id="collapseOne">
                      
                              <table class="table table-border" >
                                  <tr>
                                  <tr>
                                      <th>Sl No</th>
                                      <th>Doctor Name</th>
                                      <th>Date</th>
                                      <th>No of Days</th>
                                      <th>Reason</th>
                                      <th>Bill No</th>
                                      <th>Total Amount</th>
                                  </tr>
                                  <tbody>';
             foreach($getresult as $data)
             {
               $adate=$data['appointment_date'];
               $cancel_flag=$data['cancel_flag'];
               $cdate=date('Y-m-d');
               $date1=date_create($adate);
                $date2=date_create($cdate);
                $diff=date_diff($date1,$date2);
                $no_of_days=$diff->format("%a days");
              $spanclg='';
                if($cancel_flag==1){
                   $spanclg='<span class="notification-tag badge badge-danger m-0">Cancelled</span>';
                 }

               
               $html.='<tr>
                        <td>'.$sl.'</td>
                        <td class="align-middle border-top-0">'.$data['docname'].'</td>
                        <td class="align-middle border-top-0">
                            <i class="la la-calendar-check-o text-warning"></i> '.$data['adate'].' '.$spanclg.'
                        </td>
                        <td>'.$no_of_days.'</td>
                        <td class="align-middle border-top-0">
                            <i class="la la-circle text-danger"></i> '.$data['dess'].'
                        </td>
                        <td>'.$data['invoice_number'].'</td>
                        <td>'.number_format($data['grand_total'],2).'</td>
                    </tr>';
                $sl++;
             }



              foreach($getresultbil_patient as $data)
             {
               $adate=$data['billing_date'];
              // $cancel_flag=$data['cancel_flag'];
               $cdate=date('Y-m-d');
               $date1=date_create($adate);
                $date2=date_create($cdate);
                $diff=date_diff($date1,$date2);
                $no_of_days=$diff->format("%a days");
              $spanclg='';
                // if($cancel_flag==1){
                //    $spanclg='<span class="notification-tag badge badge-danger m-0">Cancelled</span>';
                //  }

               
               $html.='<tr>
                        <td>'.$sl.'</td>
                        <td class="align-middle border-top-0">'.$data['docname'].'</td>
                        <td class="align-middle border-top-0">
                            <i class="la la-calendar-check-o text-warning"></i> '.$data['bill_date'].' '.$spanclg.'
                        </td>
                        <td>'.$no_of_days.'</td>
                        <td class="align-middle border-top-0">
                            <i class="la la-circle text-danger"></i> 
                        </td>
                        <td>'.$data['invoice_number'].'</td>
                        <td>'.number_format($data['grand_total'],2).'</td>
                    </tr>';
                $sl++;
             }
             $html.='</tbody></table></div></div>';
            echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
          }
          else
          {
              echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
          }
        }
        else
        {
                echo json_encode(array('msg'=>'','error' =>'No Data Found','error_message' =>''));
        }
      }
      else
      {
           echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
      }
  }


  public function getallinvestigation()
  {
      $this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[10000]');
      if($this->form_validation->run() == TRUE)
      {
        $sdate=trim(htmlentities($this->input->post('sdate')));
        $var_array=array($sdate);
         
          $getresult=$this->Common_model->getallinvestigationmdl($var_array);
          if($getresult)
          {
            $sl=1;
            $html='<div class="table-responsive"><table id="tableid" class="table table-bordered table-hover"><thead><tr><th>Sl No</th><th>Patient Name</th><th>Date</th><th>Doctor Name</th><th align="center">Total Charges Count</th><th>Action</th></tr></thead><tbody>';
            foreach($getresult as $data)
            {
                $html.='<tr><td><input type="hidden" id="'.$sl.'" value="'.$data['created_date'].'">'.$sl.'</td><td>'.$data['pname'].'</td><td>'.$data['invesdate'].'</td><td>'.$data['docname'].'</td><td>'.$data['cnt'].'</td><td><button onclick="addinvest('.$sl.','.$data['patient_registration_id'].')" class="btn btn-success"><i class="la la-eye"></i></button></td></tr>';
                $sl++;
            }
            $html.='</tbody></table></div>';
            echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
          }
          else
          {
              echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
          }
       
      }
      else
      {
           echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
      }
  }

  public function addinvest()
  {
    $this->form_validation->set_rules('patid', 'Patient ID', 'trim|required|numeric');
    if($this->form_validation->run() == TRUE)
      {
        $var_array=array($this->input->post('patid'),$this->input->post('dte'),$this->session->userdata('office_id'));
        $getdata=$this->Common_model->getinvestdetails($var_array);
        if($getdata)
        {
           $html='<form id="edit_form" action="#" method="post"> 
               <div id="div_modal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title"></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                               <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 
                                  <div class="shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0 0px 3px 1px #5e5f67 !important;padding:8px !important;background: #f6f6f6ba !important;color: #0b0b0b !important;margin-bottom: 1rem !important;">
                               <div class="row" style="font-family: sans-serif;">
                                          <div class="col-md-4">
                                              <p>Patient Name:<t style="color:red;">'.$getdata[0]['pname'].'</t></p>
                                          </div>
                                          <div class="col-md-4">
                                              <p>Date:<t style="color:red;">'.$getdata[0]['invesdate'].'</t></p>
                                          </div>
                                          <div class="col-md-4">
                                              <p>Doctor Name:<t style="color:red;">'.$getdata[0]['docname'].'</t></p>
                                          </div>
                                 </div>
                                 
                                   <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>Investigation Charges details</span>
                                          </div><table class="table table-bordered table-hover"><thead><tr><th>Sl No</th><th>Charges</th><th>Amount</th></tr><tbody>
                                  ';
                                  $sl=1;
                            foreach($getdata as $data)
                            {
                                 $getparticularname=$this->Common_model->getparticularsmodel($data['charge_id'],$data['particulars_id'],$this->session->userdata('office_id'));
                                  $html.='<tr><td>'.$sl.'</td><td>'.$getparticularname[0]['name'].'</td><td>'.$getparticularname[0]['amount'].'</td></tr>';

                               $sl++;
                            }

                        $html.='</table></div>
                              </div>
                              <div class="modal-footer">
    <button style="display:none;" id="save" class="btn btn-primary btn-sm" type="button" onclick="updatedataval();"><i class="fas fa-plus-square"></i>Update</button>
      <button type="button" id="mclose" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>';
              echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
          
        }
        else
        {
          echo json_encode(array('msg'=>'','error' =>'Name data Found','error_message' =>''));
        }
      }
      else
      {
        echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
      }
  }
   

 }
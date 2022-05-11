<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counseling extends CI_Controller {

	private $msg;
	private $error;
	private $error_message;
	private $randval;
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        
        $this->load->model('Counseling_model');
        $this->load->model('Common_model');
    }
	public function index()
	{
      $data['title']='EMR::Counseling';
      $data['activecls']='counseling';
      $cdate=date('Y-m-d');
      $content=$this->load->view('master/counseling',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}

  public function gettreatmentplan()
  {
      $this->form_validation->set_rules('surgical_date', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
      $this->form_validation->set_rules('chargetype_id', 'Charge Type ID', 'trim|required|min_length[1]|max_length[16]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $surgical_date=trim(htmlentities($this->input->post('surgical_date')));
        $chargetype_id=trim(htmlentities($this->input->post('chargetype_id')));
        $fl=$this->input->post('flag')-1;
        $var_array=array($fl,$surgical_date,$chargetype_id,$this->session->userdata('office_id'));
          $getresult=$this->Counseling_model->gettreamnetplanmodel($var_array);
          $flag=$this->input->post('flag');
          if($getresult)
          {
            $tdd='';$tdd1='';
            if($chargetype_id==2)
            {
              if($flag==1)
              {
                $idname='sur_open';
                $tdd='<th>Delete</th>';
              }
              elseif($flag==2)
              {
                $idname='sur_pending';
              }
              elseif($flag==3)
              {
                $idname='sur_completed';
              }
              elseif($flag==4)
              {
                $idname='sur_cancel';
              }
              
              
            }
            elseif($chargetype_id==3)
            {
              if($flag==1)
              {
                $idname='las_open';
                $tdd='<th>Delete</th>';
               
              }
              elseif($flag==2)
              {
                $idname='las_pending';
              }
              elseif($flag==3)
              {
                $idname='las_completed';
              }
              elseif($flag==4)
              {
                $idname='las_cancel';
              }
            }
               elseif($chargetype_id==4)
            {
              if($flag==1)
              {
                $idname='inj_open';
                $tdd='<th>Delete</th>';
               
              }
              elseif($flag==2)
              {
                $idname='inj_pending';
              }
              elseif($flag==3)
              {
                $idname='inj_completed';
              }
              elseif($flag==4)
              {
                $idname='inj_cancel';
              }
            }
            $html='<div class="table-responsive"><table id="'.$idname.'_datatable" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>MRD NO</th>
                                    <th>Mobile No</th>
                                    <th>Doctor Name</th>
                                    <th>Particulars</th>
                                    <th>EYE</th>
                                    <th>A Date</th>
                                    <th>Action</th>
                                    '.$tdd.'
                                  </tr>
                                </thead><tbody>';
            $sl=1;
            foreach($getresult as $data)
            { 
            if($flag==1)
              {
                
                
                $tdd1='<td><button class="btn btn-danger" onclick="deletedata('.$data['examination_treatmentplan_id'].','.$this->input->post('flag').')"><i class="la la-trash"></i></button></td>';
              } 
               if($data['particular_id'])
              {
                 $par= explode(",",$getresult[0]['particular_id']);
                 if($par)
                 {
                  $parti='';
                   foreach($par as $pardata)
                   {
                    if($pardata){
                     $getparticularname=$this->Common_model->getparticularsmodel($data['chargetype_id'],$pardata,$this->session->userdata('office_id')); 
                     }
                     $parti.= $getparticularname[0]['name'].',';
                   }
                 }
              }
              $partiy=substr($parti, 0, -1);
              if($data['eye']==1)
              {
                $eye='Left eye';
              }         
              elseif ($data['eye']==2) 
              {
                $eye='Right Eye';
              }
              else
              {
                $eye='Both Eye';
              }
             
              $html.='<tr>
                    <td>'.$sl.'</td>
                    <td>'.$data['pateint_name'].'</td>
                    <td>'.$data['mrdno'].'</td>
                    <td>'.$data['mobileno'].'</td>
                    <td>'.$data['doctorname'].'</td>
                    <td>'.$partiy.'</td>
                    <td>'.$eye.'</td>
                    <td>'.$data['appointment_date'].'</td>
                   
                    <td><input type="hidden" id="trchargetype_id" value="'.$data['chargetype_id'].'"><button class="btn btn-success"><i class="la la-edit" onclick="updatestatus('.$data['examination_treatmentplan_id'].','.$this->input->post('flag').')"></i></button></td>
                    '.$tdd1.'
                  </tr>';
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

  public function updatestatus()
  {
    $this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
    if($this->form_validation->run() == TRUE)
      {
          $var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
          $getresult=$this->Counseling_model->getpatientdetailsproceduremdl($var_array);
          if($getresult)
          {
            $le=$r=$b='';
            if($getresult[0]['eye']==1)
              {
                $le='checked';
              }         
              elseif ($getresult[0]['eye']==2) 
              {
                $r='checked';
              }
              else
              {
                $b='checked';
              }

              if($getresult[0]['particular_id'])
              {
                 $par= explode(",",$getresult[0]['particular_id']);
                 if($par)
                 {
                  $parti='';
                   foreach($par as $pardata)
                   {
                    if($pardata){
                     $getparticularname=$this->Common_model->getparticularsmodel($getresult[0]['chargetype_id'],$pardata,$this->session->userdata('office_id')); 
                      }
                     $parti.= $getparticularname[0]['name'];
                   }
                 }
              }

              $getusname=$this->Common_model->getallusercounseler(6); 
              $us='';
              if($getusname)
              {
                foreach($getusname as $data)
                {
                $us.='<option value="'.$data['user_id'].'">'.$data['name'].'</option>';
                }
              }
              if($getresult[0]['chargetype_id']==2)
              {
                $clsn="style='display:block'";
              }
              elseif($getresult[0]['chargetype_id']==3)
              {
                $clsn="style='display:none'";
              }
              elseif($getresult[0]['chargetype_id']==4)
              {
                $clsn="style='display:none'";
              }


              $flag=$this->input->post('flag');
              $flagh=$flag-1;
              if($flagh==0)
              {
                $opt=' <option value="1">Pending</option>
                       <option value="2">Complete</option>
                       <option value="3">Cancel</option>';
              }
              elseif($flagh==1)
              {
                 $opt='<option value="2">Complete</option>
                       <option value="3">Cancel</option>';
              }
               elseif($flagh==2)
              {
                 $opt='<option value="3">Cancel</option>';
              }
              else
              {
                $opt='<option value="3">Cancel</option>';
              }
              
              
               
              $remval=$getresult[0]['open_remarks'].' '.$getresult[0]['pending_remarks'].' '.$getresult[0]['completed_remarks'];
              $rechk='';
              if($remval)
              {
                $rechk='<br/>Remarks:'.$remval;
              }
              $penrem='';
              if($getresult[0]['open_remarks'])
              {
                $penrem='<p>Remarks:'.$remval.'</p>';
              }

              $var_arrays=array($this->session->userdata('office_id'));
              $is='';
              $insurancecompanys=$this->Common_model->getinsurance_company($var_arrays);
              if($insurancecompanys)
              {
                $is='';
                foreach($insurancecompanys as $data)
                {
                  $is.='<option value="'.$data['insurance_company_id'].'">'.$data['name'].'</option>';
                }
              }

             
            
            $html='<style>.ui-widget {
    font-size: 9px;
    line-height: 0.1;
}</style> 
              <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 
               <div id="div_modal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title"></h4>
                                  <input type="hidden" id="flag" name="flag" value="'.$flag.'">
                                   <input type="hidden" id="selpart" name="selpart" value="'.$getresult[0]['particular_id'].'">
                                  <input type="hidden" name="trchargetype_id" id="trchargetype_id" value="'.$getresult[0]['chargetype_id'].'">
                                  <input type="hidden" id="treamentplan_id" name="treamentplan_id" value="'.$getresult[0]['examination_treatmentplan_id'].'">
                                  <input type="hidden" id="pat_hidname" value="'.$getresult[0]['pateint_name'].'">
                                  <input type="hidden" id="patidval" value="'.$getresult[0]['patient_registration_id'].'">
                                  <input type="hidden" id="pat_hidmrd" value="'.$getresult[0]['mrdno'].'">
                                  <input type="hidden" id="pat_hidmbl" value="'.$getresult[0]['mobileno'].'">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                               <div class="shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0 0px 3px 1px #5e5f67 !important;padding:8px !important;background: #f6f6f6ba !important;color: #0b0b0b !important;margin-bottom: 1rem !important;">
                               <div class="row" style="font-family: sans-serif;">
                                  
                                          <div class="col-md-4">
                                              <p>Name:<t style="color:red;">'.$getresult[0]['pateint_name'].'</t></p>
                                              
                                          </div>

                                          <div class="col-md-4">
                                              <p>MRD NO:<t style="color:red;">'.$getresult[0]['mrdno'].'</t></p>
                                          </div>

                                          <div class="col-md-4">
                                              <p> Eye: 
                                                  <label for="radio-1">L</label>
                                                  <input type="radio" name="eyetreatmentplan" id="radio-1" '.$le.' class="jui-radio-buttons" value="1">
                                                  <label for="radio-2">R</label>
                                                  <input type="radio" name="eyetreatmentplan" id="radio-2" '.$r.' class="jui-radio-buttons" value="2">
                                                  <label for="radio-3">B</label>
                                                  <input type="radio" name="eyetreatmentplan" id="radio-3" '.$b.' class="jui-radio-buttons" value="3">
                                              </p>
                                              
                                          </div>
                                   
                                  </div>
                                  <div class="row" style="font-family: sans-serif;">
                                  
                                          <div class="col-md-4">
                                             
                                              <p>Doctor:<t style="color:red;">'.$getresult[0]['doctorname'].'</t></p>
                                          </div>

                                          <div class="col-md-8">
                                              <p>Procedure:<t style="color:red;">'.$parti.'</t></p>
                                          </div>

                                         
                                   
                                  </div>
                                  </div>
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0 0px 3px 1px #5e5f67 !important;padding:8px !important;background: #f6f6f6ba !important;color: #0b0b0b !important;margin-bottom: 1rem !important;">
                                  <div class="row" style="font-family: sans-serif;">
                                  
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Procedure</label>
                                                <select class="form-control select2" multiple="multiple" name="update_procedure[]" id="update_procedure">
                                                    <option value="">Select Procedure</option>
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-md-3">
                                              <label>Referred By</label>
                                              <input type="text" class="form-control" name="referredby" id="referredby" value="'.$getresult[0]['referredby'].'">
                                          </div>

                                          <div class="col-md-3">
                                              <label>Email ID</label>
                                              <input type="text" class="form-control" name="emailid" id="emailid">
                                          </div>
                                   
                                  </div>
                                  
                                    <div class="row" style="font-family: sans-serif;">
                                  
                                          <div class="col-md-2">
                                             <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" id="status">
                                                    '.$opt.'
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-md-3">
                                              <label>on</label>
                                              <input type="date" class="form-control treatmentplan_date" name="date_on" id="date_on">
                                          </div>

                                          <div class="col-md-3" '.$clsn.'>
                                              <label>Exp Surgery Date</label>
                                              <input type="date" class="form-control treatmentplan_date" name="sur_date" id="sur_date">
                                          </div>
                                          <div class="col-md-2" '.$clsn.'>
                                              <label>Room No</label>
                                              <input type="text" class="form-control" name="roomno" id="roomno" value="'.$getresult[0]['roomno'].'">
                                          </div>
                                          <div class="col-md-2" '.$clsn.'>
                                              <label>Bed No</label>
                                              <input type="text" class="form-control" name="bedno" id="bedno" value="'.$getresult[0]['bedno'].'">
                                          </div>
                                   
                                     </div>
                                     </div>
                                     <div class="shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0 0px 3px 1px #5e5f67 !important;padding:8px !important;background: #f6f6f6ba !important;color: #0b0b0b !important;margin-bottom: 1rem !important;">
                                       <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>Insurance details</span>
                                          </div>
                                      <div class="row" style="font-family: sans-serif;">

                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Insurance</label>
                                                <select class="form-control" name="insurancename" id="insurancename">
                                                   <option value="0">Non Insurance</option>
                                                    '.$is.'
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                             <div class="form-group">
                                                <label>UHID Number</label>
                                                <input type="text" class="form-control" name="uhid" id="uhid">
                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                              <label>Corporate Name</label>
                                              <input type="text" class="form-control" name="coname" id="coname">
                                          </div>

                                          <div class="col-md-4 form-group">
                                              <label>Co-operative Society</label>
                                              <input type="text" class="form-control" name="society" id="society">
                                          </div>
                                          <div class="col-md-4">
                                              <label>TPA Name</label>
                                              <input type="text" class="form-control" name="tpaname" id="tpaname">
                                          </div>
                                          <div class="col-md-4">
                                              <label>Receipt Number</label>
                                              <input type="text" class="form-control" name="receiptno" id="receiptno">
                                          </div>
                                   
                                     </div>
                                     </div>
                                     <div class="row">
                                      <div class="col-md-12">
                                        '.$penrem.'
                                      </div>
                                     </div>
                                      <div class="row form-group" style="font-family: sans-serif;">
                                       <div class="col-md-4">
                                              <label>Username</label>
                                              <select class="form-control select2" name="usernamepre" id="usernamepre">
                                                '.$us.'
                                              </select>
                                          </div>
                                         <div class="col-md-8">
                                              <label>Remarks</label>
                                              <textarea type="text" class="form-control" name="remarks" id="remarks"></textarea>
                                          </div>
                                      </div>

                                      <div class="row form-group">
                                        <div class="col-md-12">
                                            <div class="dropzone dropzone-area" id="dpz-multiple-files">
                                              <input type="file" id="files" name="files[]" multiple="multiple" >
                                          </div>
                                        </div>
                                      </div>

                              </div>
                              <div class="modal-footer">
    <button  class="btn mr-1 mb-1 btn-info btn-md" type="submit" id="savep"><i class="fas fa-plus-square"></i>Save</button>
      <button type="button" id="mclose" class="btn mr-1 mb-1 btn-danger btn-md closes" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
              ';
              echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
            }
            else
            {
              echo json_encode(array('msg'=>'','error'=> 'No Data Found','error_message' =>''));
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

    private function fetch_data() 
    {
            $flag=$this->input->post('flag');
            if($flag==1)
            {
              $rem='open_remarks';
            }
            elseif($flag==2)
            {
              $rem='pending_remarks';
            }
            elseif($flag==3)
            {
              $rem='completed_remarks';
            }
            elseif($flag==3)
            {
              $rem='cancel_remarks';
            }
            elseif($flag==4)
            {
              $rem='cancel_remarks';
            }
            $particular='';
            if($this->input->post('update_procedure')){
            $particular = implode(',',$this->input->post('update_procedure'));
            }
            $particular_id=$this->db->select('particular_id')
                         ->from('examination_treatmentplan')
                         ->where(array('examination_treatmentplan_id'=>$this->input->post('treamentplan_id')))
                         ->get()->row()->particular_id;

              $part=trim($particular);

        $office_id=$this->session->office_id;
          return array(
              'particular_id'=>$part,
              'referredby'=>trim(htmlentities($this->input->post('referredby'))),
              'emailid'=>trim(htmlentities($this->input->post('emailid'))),
              'status'=>trim(htmlentities($this->input->post('status'))),
              'date_on '=>$this->input->post('date_on'),
              'sur_date'=>$this->input->post('sur_date'),
              'eye'=>$this->input->post('eyetreatmentplan'),
              'roomno'=>trim(htmlentities($this->input->post('roomno'))),
              'bedno'=>trim(htmlentities($this->input->post('bedno'))),
              'insurancename'=>trim(htmlentities($this->input->post('insurancename'))),
              'uhid'=>trim(htmlentities($this->input->post('uhid'))),
              'coname'=>trim(htmlentities($this->input->post('coname'))),
              'society'=>trim(htmlentities($this->input->post('society'))),
              'tpaname'=>trim(htmlentities($this->input->post('tpaname'))),
              'receiptno'=>trim(htmlentities($this->input->post('receiptno'))),
              'usernamepre'=>trim(htmlentities($this->input->post('usernamepre'))),
               $rem=>trim(htmlentities($this->input->post('remarks')))
             );
    }
   public function saveupdatestatus()
   {
      $this->form_validation->set_rules('treamentplan_id', 'Treatment Plan ID', 'trim|required|min_length[1]|max_length[30]');
       if($this->form_validation->run() == TRUE)
       { 
            $data=$this->fetch_data();
            $getresult=$this->Counseling_model->saveexaminationmodel($data,$this->input->post('treamentplan_id'));
            if($getresult)
            {

               echo json_encode(array('msg' =>'Saved Successfully','error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
         
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }
    public function getdataval()
  {
    $this->form_validation->set_rules('surgery_id', 'Surgery ID', 'trim|required|min_length[1]|max_length[100]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $surgery_id=trim(htmlentities($this->input->post('surgery_id')));
        $chargeid=trim(htmlentities($this->input->post('chargeid')));
          $var_array=array($surgery_id,$chargeid,$this->session->userdata('office_id'));
          $getresult=$this->Counseling_model->getdatasurgerymdl($surgery_id,$chargeid,$this->session->userdata('office_id'));
          if($getresult)
          {
            $opt='<option value="">Select Particulars</option>';
            foreach($getresult as $data)
            {
                  if($chargeid==2)
                  {
                      $tabname='ipdcharge';
                      $idname='ipdcharge_id';
                  }
                  elseif ($chargeid==3) {
                      $tabname='laser';
                      $idname='laser_id';
                  }
                  elseif ($chargeid==4) {
                      $tabname='injection';
                      $idname='injection_id';
                  }
                $opt.='<option value="'.$data[$idname].'">'.$data['name'].' '.$data['amount'].'</option>';
            }

             echo json_encode(array('msg'=>$opt,'error'=>'','error_message' =>''));
            
          }
          else
          {
            echo json_encode(array('msg'=>'','error'=>'No Data Found','error_message' =>''));
          }
       
      }
      else
      {
        echo json_encode(array('msg'=>'','error'=>'','error_message' => $this->form_validation->error_array()));
      }
  }
   public function deletedata()
  {
    $this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $delete_id=trim(htmlentities($this->input->post('getid')));
        $var_array=array($delete_id,$this->session->userdata('office_id'));
          $getresult=$this->Counseling_model->deletedata($delete_id);
          if($getresult)
          {
             echo json_encode(array('msg'=>'Deleted Successfully','error'=>'','error_message' =>''));
          }
          else
          {
            echo json_encode(array('msg'=>'','error'=>'Failed to Delete','error_message' =>''));
          }
       
      }
      else
      {
        echo json_encode(array('msg'=>'','error'=>'','error_message' => $this->form_validation->error_array()));
      }
  }
  public function multipleImageStore()
  {
 
      $countfiles = count($_FILES['files']['name']);
  
      for($i=0;$i<$countfiles;$i++){
  
        if(!empty($_FILES['files']['name'][$i])){
  
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
 
          // Set preference
          $config['upload_path'] = '/documents'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];
  print_r($config);exit;
          //Load upload library
          $this->load->library('upload',$config); 
          $arr = array('msg' => 'something went wrong', 'success' => false);
          // File upload
          if($this->upload->do_upload('file')){
           
           $data = $this->upload->data(); 
           $insert['name'] = $data['file_name'];
           print_r($data);exit;
          //  $this->db->insert('images',$insert);
          //  $get = $this->db->insert_id();
          // $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
 
          }
        }
  
      }
      echo json_encode($arr);
  
  }

   public function comnewfunction()
  {
    
        //$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
          $getresult=1;
          if($getresult)
          {
            $chid=$this->input->post('chargeid');
            if($chid==2)
            {
              $typname='Surgery';
              $sty='style="display:block"';
            }
            elseif($chid==3)
            {
              $typname='Laser';
              $sty='style="display:none;"';
            }
            elseif($chid==4)
            {
              $typname='Injection';
              $sty='style="display:none;"';
            }
            $var_array=array($this->session->userdata('office_id'));
            $departments=$this->Common_model->getdepartment($var_array);
            if($departments)
            {
              $opt='';
              foreach($departments as $data)
              {
                $opt.='<option value="'.$data['department_id'].'">'.$data['name'].'</option>';
              }
            }
            $var_arrays=array($this->session->userdata('office_id'));
 $is='';
              $insurancecompanys=$this->Common_model->getinsurance_company($var_arrays);
              if($insurancecompanys)
              {
                $is='';
                foreach($insurancecompanys as $data)
                {
                  $is.='<option value="'.$data['insurance_company_id'].'">'.$data['name'].'</option>';
                }
              }
$usd='';
              $var_arraysf=array(2,$this->session->userdata('office_id'));
              $getsur=$this->Common_model->getdoctorval($var_arraysf);
              if($getsur)
              {
                
                foreach($getsur as $data)
                {
                  $usd.='<option value="'.$data['doctors_registration_id'].'">'.$data['name'].'</option>';
                }
              }
              $ussd='';
              $var_arraysf=array(3,$this->session->userdata('office_id'));
              $getant=$this->Common_model->getdoctorval($var_arraysf);
              if($getant)
              {
                $ussd='';
                foreach($getant as $data)
                {
                  $ussd.='<option value="'.$data['doctors_registration_id'].'">'.$data['name'].'</option>';
                }
              }

            $html='<form id="preoperative_form" method="post"> 
              <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 
              <input type="hidden" id="pretreamentplan_id" name="pretreamentplan_id">
              <input type="hidden" id="chargeid" name="chargeid" value="'.$chid.'">
              <input type="hidden" id="patidval_pre" name="patient_registration_id">
               <div id="div_modalcom" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                          <div class="modal-content shadow">
                              <div class="modal-header">
                                  <h4 class="modal-title modal-titles"></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                               <div class="shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0 0px 3px 1px #5e5f67 !important;padding:8px !important;background: #f6f6f6ba !important;color: #0b0b0b !important;margin-bottom: 1rem !important;">
                                  <ul class="nav nav-tabs">
                                      <li class="nav-item" style="display:none;">
                                          <a class="nav-link" id="base-tab7" data-toggle="tab" aria-controls="tab7" href="#tab7" aria-expanded="true">Preoperative Appointment</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link active" id="base-tab8" data-toggle="tab" aria-controls="tab8" href="#tab8" aria-expanded="false">'.$typname.' Appointment</a>
                                      </li>
                                  </ul>

                                  <div class="tab-content px-1 pt-1">
                                     <div role="tabpanel" class="tab-pane" id="tab7" aria-expanded="true" aria-labelledby="base-tab7" style="display:none;">
                                          <div class="row">
                                                <div class="col-md-3">
                                                    <label>Appointment Date</label>
                                                    <input type="date" class="form-control treatmentplan_date" name="preappointment_date" id="preappointment_date">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Patient Name</label>
                                                    <input type="text" readonly class="form-control" name="paitent_name" id="paitent_name">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Preferred Phone</label>
                                                    <input type="text" class="form-control" readonly name="prefered_phone" id="prefered_phone">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Alternate Phone</label>
                                                    <input type="text" class="form-control" name="alternate_phone" id="alternate_phone">
                                                </div>
                                          </div>

                                          <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label>Appointment Type</label>
                                                    <select name="appointment_type" id="appointment_type" class="form-control select2">

                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Source</label>
                                                    <select name="source" id="source" class="form-control select2">
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Reason</label>
                                                    <textarea class="form-control" name="reason" id="reason"></textarea>
                                                </div>
                                          </div>
                                     </div>
                                     <div class="tab-pane active" id="tab8" aria-labelledby="base-tab8">
                                          <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label>Patient Name</label>
                                                    <input type="text" readonly class="form-control" name="prepaitent_name" id="prepaitent_name">
                                                </div>
                                                  <div class="col-md-3">
                                                    <label>MRD NO</label>
                                                    <input type="text" readonly class="form-control" name="mrdno" id="mrdno">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Preferred Phone</label>
                                                    <input type="text" readonly class="form-control" name="preprefered_phone" id="preprefered_phone">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Alternate Phone</label>
                                                    <input type="text" class="form-control" name="alternate_phone" id="alternate_phone">
                                                </div>
                                               
                                          </div>
                                          <div class="row form-group">
                                           <div class="col-md-3">
                                                    <label>EYE</label>
                                                    <select class="form-control" name="eye_operate" id="eye_operate">
                                                      <option value="1">Left</option>
                                                      <option value="2">Right</option>
                                                      <option value="3">Both</option>
                                                    </select>
                                                </div>
                                              <div class="col-md-3">
                                                <label>Type Of '.$typname.'</label>
                                                <select class="form-control select2" name="surgery_type" id="surgery_type" onchange="getdataval(this.value)">
                                                  <option value="">Select '.$typname.' Type</option>
                                                   '.$opt.'
                                                </select>
                                              </div>
                                              <div class="col-md-6">
                                                <label>Particulars</label>
                                                <select class="form-control select2" name="particular_type" id="particular_type" style="width:100%;">
                                                  <option value="">select Particulars</option>
                                                 
                                                </select>
                                              </div>
                                             
                                          </div>
                                          <div class="row form-group">
                                          <div class="col-md-3">
                                                <label>Appointment Date</label>
                                                <input type="date" class="form-control treatmentplan_date" name="admission_date" id="admission_date">
                                              </div>
                                          <div class="col-md-3" '.$sty.'>
                                                <label>Room No</label>
                                                <input type="text" class="form-control" name="room_no" id="room_no">
                                              </div>
                                           <div class="col-md-3" '.$sty.'>
                                                <label>BED No</label>
                                                <input type="text" class="form-control" name="table_no" id="table_no">
                                              </div>
                                           
                                            <div class="col-md-3">
                                              <label>Insurance Name</label>
                                              <select class="form-control" id="pre_insurancename" name="pre_insurancename">
                                                 '.$is.'
                                              </select>
                                            </div>

                                          <div class="col-md-4">
                                             <div class="form-group">
                                                <label>UHID Number</label>
                                                <input type="text" class="form-control" name="uhids" id="uhids">
                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                              <label>Corporate Name</label>
                                              <input type="text" class="form-control" name="conames" id="conames">
                                          </div>

                                          <div class="col-md-4 form-group">
                                              <label>Co-operative Society</label>
                                              <input type="text" class="form-control" name="societys" id="societys">
                                          </div>
                                          <div class="col-md-4">
                                              <label>TPA Name</label>
                                              <input type="text" class="form-control" name="tpanames" id="tpanames">
                                          </div>
                                          <div class="col-md-4">
                                              <label>Receipt Number</label>
                                              <input type="text" class="form-control" name="receiptnos" id="receiptnos">
                                          </div>
                                           
                                          </div>
                                          <div class="row form-group" >
                                           <div class="col-md-3" '.$sty.'>
                                                <label>IOL Power</label>
                                                <input type="text" class="form-control" name="iol_power" id="iol_power">
                                            </div>
                                            <div class="col-md-3" '.$sty.'>
                                              <label>IOL Lens</label>
                                              <input type="text" class="form-control" name="iol_lens" id="iol_lens">
                                            </div>
                                            <div class="col-md-3" '.$sty.'>
                                              <label>Operating Surgeon</label>
                                              <select class="form-control select2" name="ope_surgeon" id="ope_surgeon">
                                                  <option value="">Operating Surgeon</option>
                                                  '.$usd.'
                                              </select>
                                            </div>
                                            <div class="col-md-3">
                                              <label>Anesthesia name</label>
                                               <select class="form-control select2" name="typeof_anthesia" id="typeof_anthesia">
                                                  <option value="">Select Anesthesia</option>
                                                  '.$ussd.'
                                              </select>
                                            </div>
                                             <div class="col-md-3" style="display:none;">
                                              <label>Ad. From Time</label>
                                              <input type="time"  class="form-control" name="from_time" id="from_time">
                                            </div>
                                            <div class="col-md-3" style="display:none;">
                                              <label>Ad. To Time</label>
                                              <input type="time"  class="form-control" name="to_time" id="to_time">
                                            </div>
                                          </div>
                                     </div>
                                  </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
    <button  class="btn mr-1 mb-1 btn-info btn-md" type="button" onclick="submitpreop()"><i class="fas fa-plus-square"></i>Save</button>
      <button type="button" id="mclose" class="btn mr-1 mb-1 btn-danger btn-md closes" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div></form>
              ';
              echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
            }
            else
            {
              echo json_encode(array('msg'=>'','error'=> 'No Data Found','error_message' =>''));
            }
          
       
      
  }
private function prefetch_data() 
    {      
        $office_id=$this->session->office_id;
          return array(
              'examination_treatmentplan_id'=>$this->input->post('pretreamentplan_id'),
              'appointment_date'=>trim(htmlentities($this->input->post('preappointment_date'))),
              'alternate_phone'=>trim(htmlentities($this->input->post('alternate_phone'))),
              'appointment_type_id'=>trim(htmlentities($this->input->post('appointment_type'))),
              'patient_registration_id'=>$this->input->post('patient_registration_id'),
              'charge_id'=>$this->input->post('chargeid'),
              'source_id'=>$this->input->post('source'),
              'reason'=>$this->input->post('reason'),
              'eye'=>$this->input->post('eye_operate'),
              'typeof_surgery_id'=>trim(htmlentities($this->input->post('surgery_type'))),
              'admission_date'=>trim(htmlentities($this->input->post('admission_date'))),
              'room_no'=>trim(htmlentities($this->input->post('room_no'))),
              'table_no'=>trim(htmlentities($this->input->post('table_no'))),
              'from_time'=>trim(htmlentities($this->input->post('from_time'))),
              'to_time'=>trim(htmlentities($this->input->post('to_time'))),
              'insurance_name'=>trim(htmlentities($this->input->post('pre_insurancename'))),
              'iol_power'=>trim(htmlentities($this->input->post('iol_power'))),
              'iol_lens'=>trim(htmlentities($this->input->post('iol_lens'))),
              'uhid'=>trim(htmlentities($this->input->post('uhids'))),
              'coname'=>trim(htmlentities($this->input->post('conames'))),
              'society'=>trim(htmlentities($this->input->post('societys'))),
              'tpaname'=>trim(htmlentities($this->input->post('tpanames'))),
              'receiptno'=>trim(htmlentities($this->input->post('receiptnos'))),
              'operating_surgon'=>trim(htmlentities($this->input->post('ope_surgeon'))),
              'typeof_anthesia'=>trim(htmlentities($this->input->post('typeof_anthesia'))),
              'particular_type'=>trim(htmlentities($this->input->post('particular_type'))),
              'parent_id'=>$this->session->userdata('parent_id'),
              'login_id'=>$this->session->userdata('login_id'),
              'office_id'=> $this->session->userdata('office_id')
             );
    }
   public function savepreop()
   {
       $this->form_validation->set_rules('pretreamentplan_id', 'Treatment Plan ID', 'trim|min_length[1]|max_length[30]');
       if($this->form_validation->run() == TRUE)
       { 
            $data=$this->prefetch_data();
            $getresult=$this->Counseling_model->saveproperativedata($data,$this->input->post('treamentplan_id'));
            if($getresult)
            {
               echo json_encode(array('msg' =>'Saved Successfully','error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_collection_report extends CI_Controller {
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
        
        $this->load->model('Sales_collection_report_model');
        $this->load->model('Patient_appointment_report_model');
        $this->load->model('Common_model');
    }
  public function index()
  {
    $data['title']='EMR::Collection Report';
    $data['activecls']='Sales_collection_report';
    $office_id=$this->session->office_id;
    $var_array=array($office_id);
    $data['getpatient']=$this->Common_model->getpateintmrdnos($var_array);
    $data['getdoctor']=$this->Common_model->getdoctors($var_array);
    $data['type']=1;
    $data['modeofpays']=$this->Common_model->getmodeofpay($var_array);
    $data['chargeslist']=$this->Common_model->getchargeslist($var_array);
    // $data['getlens']=$this->Common_model->getlensmaster($var_array);
    // $data['getstaff']=$this->Common_model->GetStaffData($var_array);
    $content=$this->load->view('reports/sales_collection_report',$data,true);
    $this->load->view('includes/layout',['content'=>$content]);
  }

    public function getsummary()
    {
      $this->form_validation->set_rules('sum_fromdate', 'From Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('sum_todate', 'To Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('patient_id', 'Patient Name', 'trim|min_length[1]|max_length[20]|numeric');
      $this->form_validation->set_rules('doctor_id', 'Doctor Name', 'trim|min_length[1]|max_length[20]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $sum_fromdate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_fromdate')))));
        $sum_todate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_todate')))));
        $patient_id=trim(htmlentities($this->input->post('patient_id')));
        $doctor_id=trim(htmlentities($this->input->post('doctor_id')));
        $det_modeofpay=trim(htmlentities($this->input->post('modeofpay_id')));
        $getresult=$this->Sales_collection_report_model->getsummaryreportmodel($sum_fromdate,$sum_todate,$patient_id,$doctor_id,$this->session->userdata('office_id'),$det_modeofpay);
        // print_r($getresult);exit;
        $getresult_patient=$this->Patient_appointment_report_model->getsummaryreportmodel($sum_fromdate,$sum_todate,$patient_id,$doctor_id,$this->session->userdata('office_id'));
      if($getresult || $getresult_patient)
      {
          $pat=$doc=$mod=$pat1=$doc1='';	
		if($patient_id>0)
		{
			$pat=' and patient_appointment.patient_registration_id='.$patient_id;
			$pat1=' and billing_master.patient_registration_id='.$patient_id;
		}
		if($doctor_id>0)
		{
			$doc=' and billing_master.doctor_id='.$doctor_id;
			$doc1=' and patient_appointment.doctor_id='.$doctor_id;
		}
		if($det_modeofpay>0)
		{
			$mod=' and billing_master.modeofpay_id='.$det_modeofpay;
		}
$u=1;
    $modedata=$this->Sales_collection_report_model->getmodemodel($this->session->userdata('office_id'),$det_modeofpay);
$html='<div class="row">';
    foreach($modedata as $datva)
       {
           $moden=$datva['name'];
           $modeofpay_idd=$datva['modeofpay_id'];
           $advancecashamount=$this->db->query("select sum(billing_master.grand_total) as total from billing_master  left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
        where billing_date >= '$sum_fromdate' AND billing_date <= '$sum_todate' and  billing_master.modeofpay_id='$modeofpay_idd' $pat1  $doc")->row();



           $patapp=$this->db->query("select  sum(opdcharge.amount) as totalamt
    from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
    
    inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
    left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
    where billing=0 and appointment_date between  '$sum_fromdate' and '$sum_todate'  and patient_appointment.modeofpay_id='$modeofpay_idd'    $pat")->row();
          //  echo $this->db->last_query();exit;

           if($u==1)
           {
              $cli='success';
           }
           elseif ($u==2) {
              $cli='danger';
           }
           elseif ($u==3) {
              $cli='info';
           }
           elseif ($u==4) {
              $cli='primary';
           }
           elseif ($u==5) {
              $cli='warning';
           }
           elseif ($u==6) {
              $cli='secondary';
           }
           elseif ($u==7) {
              $cli='danger';
           }
           else
           {
            $cli='success';
           }

             $html.='
                  <div class="col-md-4">
                      <div class="alert alert-'.$cli.' mb-2" role="alert">
                       <h4 style="text-align:center;font-weight:bold;">'.$moden.':'.number_format((float)$advancecashamount->total+$patapp->totalamt
            ,2,'.', '').'</h4>
                       </div>
                  </div>
                  ';
                  $u++;

       }


        $html.='</div><table class="table table-striped table-bordered dataex-html5-selectors" id="example_sum">
            <thead>
                    <tr>
                         <th>SL NO</th>
                         <th>Bill No</th>
                         <th>Bill Date</th>
                         <th>MRD NO</th>
                         <th>Patient Name</th>
                         <th>Doctor Name</th>
                         <th>Mode of Pay</th>
                         <th>Advance Amount</th>
                         <th>Bill Amount</th>
                     </tr>
                     </thead>
                   <tbody>';
        $sl=1;
        $sumnetamount=$sumnetamount_patient='0.00';
        foreach ($getresult as $data) {
            // print_r($getresult);exit;
            // echo $this->db->last_query();exit;
       
            $html.='<tr>
                  <td>'.$sl.'</td>
                  <td>'.$data['invoice_number'].'</td>
                  <td>'.$data['bill_date'].'</td>
                  <td>'.$data['mrdno'].'</td>
                  <td>'.$data['pname'].'</td>
                  <td>'.$data['docname'].'</td>
                  <td>'.$data['mode'].'</td>
                  <td>'.number_format($data['advanced_amount'],2).'</td>
                  <td>'.number_format($data['grand_total'],2).'</td>
                </tr>';
                $sl++;
                $sumnetamount+=$data['grand_total'];
             
        }
        foreach ($getresult_patient as $data_patient) {
       
            $html.='<tr>
                  <td>'.$sl.'</td>
                  <td>'.$data_patient['invoice_number'].'</td>
                  <td>'.$data_patient['appointment_date'].'</td>
                  <td>'.$data_patient['mrdno'].'</td>
                  <td>'.$data_patient['pname'].'</td>
                  <td>'.$data_patient['docname'].'</td>
                  <td>'.$data_patient['modename'].'</td>
                  <td>0.00</td>
                  <td>'.number_format($data_patient['grand_total'],2).'</td>
                </tr>';
                $sl++;
                $sumnetamount_patient+=$data_patient['grand_total'];
             
        }
        $sumnetamount=$sumnetamount+$sumnetamount_patient;
              $html.='<tr>
                    <td>'.$sl.'</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>'.number_format((float)$sumnetamount ,2,'.', '').'</td>
                  </tr>
                  </tbody>
                  </table>';
        

              $this->msg='success';
              $this->error='';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message,
                  'getdata' => $html
                ));
                  exit;
          }
          else
          {
              $this->msg='';
              $this->error='No Data Found';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message
                ));
                  exit;
          }
        
      }
      else
      {
            $this->msg='';
            $this->error='';
            $this->error_message = $this->form_validation->error_array();
                echo json_encode(array(
              'msg'           => $this->msg,
              'error'         => $this->error,
              'error_message' => $this->error_message
            ));
              exit;
      }
  }

   public function getdetailed()
    {
      $this->form_validation->set_rules('sum_fromdate', 'From Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('sum_todate', 'To Date', 'trim|required|min_length[1]|max_length[20]');
      
      if($this->form_validation->run() == TRUE)
      {
        $det_fromdate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_fromdate')))));
        $det_todate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_todate')))));
        $particular=trim(htmlentities($this->input->post('particular')));
        $patient_id=trim(htmlentities($this->input->post('patient_id')));
        $det_modeofpay=trim(htmlentities($this->input->post('modeofpay_id')));
        $doctor_id=trim(htmlentities($this->input->post('doctor_id')));
        $charge_type_id=trim(htmlentities($this->input->post('charge_type_id')));
     $getresult=$this->Sales_collection_report_model->getdetailedreportmodel($det_fromdate,$det_todate,$patient_id,$doctor_id,$this->session->userdata('office_id'),$particular,$charge_type_id,$det_modeofpay);
     $getresult_patient=$this->Patient_appointment_report_model->getsummaryreportmodell($det_fromdate,$det_todate,$patient_id,$doctor_id,$this->session->userdata('office_id'),$particular,$charge_type_id);
      if($getresult || $getresult_patient)
      {
        $html='<table class="table table-striped table-bordered dataex-html5-selectors" id="example_det">
            <thead>
                    <tr>
                         <th>SL NO</th>
                         <th>Bill No</th>
                         <th>Bill Date</th>
                         <th>MRD NO</th>
                         <th>Patient Name</th>
                         <th>Doctor Name</th>
                         <th>Insurance</th>
                         <th>Mode of Pay</th>
                         <th>Charge Type</th>
                         <th>Particular</th>
                         <th>Qty</th>
                         <th>Rate</th>
                         <th>Discount</th>
                         <th>Amount</th>
                     </tr>
                     </thead>
                   <tbody>';
        $sl=1;
        $sumnetamount=$sumnetamount_patient='0.00';
        foreach ($getresult as $data) {
           $getparticularname=$this->Common_model->getparticularsmodel($data['charge_id'],$data['particulars_id'],$this->session->userdata('office_id'));
           if($data['charge_id']==1)
           {
            $charge="CONSULTATION";
           }
           else if($data['charge_id']==2)
           {
            $charge="INPATIENT";
           }
           if($data['charge_id']==3)
           {
            $charge="LASER";
           }
           if($data['charge_id']==4)
           {
            $charge="INJECTION";
           }
           if($data['charge_id']==5)
           {
            $charge="INVESTIGATION";
           }
          
           
          
            $html.='<tr>
                  <td>'.$sl.'</td>
                  <td>'.$data['invoice_number'].'</td>
                  <td>'.$data['bill_date'].'</td>
                  <td>'.$data['mrdno'].'</td>
                  <td>'.$data['pname'].'</td>
                  <td>'.$data['docname'].'</td>
                  <td>'.$data['insurance'].'</td>
                  <td>'.$data['mode'].'</td>
                  <td>'.$charge.'</td>
                  <td>'.$getparticularname[0]['name'].'</td>
                  <td>'.$data['qty'].'</td>
                  <td>'.number_format((float)$data['rate'],2,'.', '').'</td>
                  <td>'.number_format((float)$data['disamt'] ,2,'.', '').'</td>
                  <td>'.number_format((float)$data['amount'] ,2,'.', '').'</td>
                </tr>';
                $sl++;
                $sumnetamount+=$data['amount'];
        }
         foreach ($getresult_patient as $data_patient) {
           
          
            $html.='<tr>
                  <td>'.$sl.'</td>
                  <td>'.$data_patient['invoice_number'].'</td>
                  <td>'.$data_patient['appointment_date'].'</td>
                  <td>'.$data_patient['mrdno'].'</td>
                  <td>'.$data_patient['pname'].'</td>
                  <td>'.$data_patient['docname'].'</td>
                  <td>'.$data_patient['insurance'].'</td>
                  <td>CASH</td>
                  <td></td>
                  <td>'.$data_patient['particular'].'</td>
                  <td>1</td>
                  <td>'.number_format((float)$data_patient['grand_total'],2,'.', '').'</td>
                  <td>0.00</td>
                  <td>'.number_format((float)$data_patient['grand_total'] ,2,'.', '').'</td>
                </tr>';
                $sl++;
                $sumnetamount_patient+=$data_patient['grand_total'];
        }
        $sumnetamount=$sumnetamount+$sumnetamount_patient;
              $html.='
                  
                  <tr>
                    <td>'.$sl.'</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>'.number_format((float)$sumnetamount ,2,'.', '').'</td>
                  </tr>
                  </tbody>
                  </table>';
        

              $this->msg='success';
              $this->error='';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message,
                  'getdata' => $html
                ));
                  exit;
          }
          else
          {
              $this->msg='';
              $this->error='No Data Found';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message
                ));
                  exit;
          }
        
      }
      else
      {
            $this->msg='';
            $this->error='';
            $this->error_message = $this->form_validation->error_array();
                echo json_encode(array(
              'msg'           => $this->msg,
              'error'         => $this->error,
              'error_message' => $this->error_message
            ));
              exit;
      }
  }
}

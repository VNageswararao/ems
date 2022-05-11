<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_registration extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        $this->load->model('Patients_registration_model');
        $this->load->model('Common_model');
      
    }
    public function ajax_call(){
        $param=$_REQUEST;
        $response=$this->Patients_registration_model->ajax_call($param);
        echo json_encode($response);
 }
	public function index()
	{
      $data['title']='EMR::Patient Registration';
      $data['activecls']='Patients_registration';
      $var_array=array($this->session->userdata('office_id'));
      $data['patient_titles']=$this->Common_model->getpatient_titles($var_array);
      $data['citys']=$this->Common_model->getcity($var_array);
      $data['sources']=$this->Common_model->getsource($var_array);
      $data['referral_masters']=$this->Common_model->getrefferalmaster($var_array);
      $data['opdinsurancecompany']=$this->Common_model->getopdinsurancecompany($var_array);
      $data['pateintcategory']=$this->Common_model->getpateintcategory($var_array);
      $data['doctors']=$this->Common_model->getdoctors($var_array);
      $data['appointmenttypes']=$this->Common_model->getappointmenttypeopd($var_array);
      $data['mrdnos']=$this->Common_model->getpateintmrdnos($var_array);
      $data['modeofpays']=$this->Common_model->getmodeofpay($var_array);
      $content=$this->load->view('master/patients_registration',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}
    private function fetch_data() 
    {
    	 $code=1;
    	 $codee=1;
        $status=1;
        if(!$this->input->post('status'))
        {
            $status=0;
        }
         
       $return=array(
               "patients_registration"=>array(
                   "title"=>$this->input->post('patient_title_id'),
                   "fname"=>$this->input->post('fname'),
                   "lname"=>$this->input->post('lname'),
                   "gender"=>$this->input->post('gender_id'),
                   "ageyy"=>$this->input->post('agey'),
                   'agemm'=>$this->input->post('agem'),
                   'dob'=>$this->input->post('dob'),
                   'city'=>$this->input->post('city_id'),
                   'mobileno'=>$this->input->post('mobileno'),
                   'address'=>$this->input->post('address'),
                   'gmail'=>$this->input->post('gmail'),
                   'whatsup'=>$this->input->post('whatsapp'),
                   'occupation'=>$this->input->post('occupation'),
                   'insurance_company_id'=>$this->input->post('insurance_company_id'),
                   'print'=>$this->input->post('print'),
                   'referral_masters_id'=>$this->input->post('referral_masters_id'),
                   'pat_type'=>$this->input->post('pat_type'),
                   'status'=>$status,
                   'image'=>$this->session->flashdata('profile_pic'),
                   'parent_id'=>$this->session->userdata('parent_id'),
                   'login_id'=>$this->session->userdata('login_id'),
                   'office_id'=> $this->session->userdata('office_id')
                  
               ),

                "opticals_details"=>array(
                   "code"=>$code,
                   "name"=>$this->input->post('fname').$this->input->post('lname'),
                   "gender"=>$this->input->post('gender_id'),
                   'mobile'=>$this->input->post('mobileno'),
                   'address'=>$this->input->post('address'),
                   'status'=>$status,
                   'office_id'=> 1
               ),

                 "pharm_details"=>array(
                   "code"=>$codee,
                   "name"=>$this->input->post('fname').$this->input->post('lname'),
                   "gender"=>$this->input->post('gender_id'),
                   'mobile'=>$this->input->post('mobileno'),
                   'address'=>$this->input->post('address'),
                   'status'=>$status,
                   'prestype'=>1,
                   'login_id'=>1,
                   'office_id'=> 1
               ),
             "appointment_details"=>array(
                 "appointment_date"=>date('Y-m-d',strtotime($this->input->post('appointment_date'))),
                 "appointment_time"=>($this->input->post('appointment_time'))?$this->input->post('appointment_time'):date('H:i:s'),
                 "patient_category_id"=>$this->input->post('patient_category_id'),
                 "emergency"=>$this->input->post('emergency_id'),
                 "doctor_id"=>$this->input->post('doctor_id'),
                 'modeofpay_id'=>$this->input->post('modeofpay_id'),
                 "apponitment_type_id"=>$this->input->post('appointment_type_id'),
                 "appointment_opd_charge_id"=>$this->input->post('opdcharge_id'),
                 "source"=>$this->input->post('source'),
                 "billing"=>$this->input->post('billing'),
                 "description"=>$this->input->post('description'),
                 "login_id"=>$this->session->userdata('login_id')
             ),
             "bill_number"=>array(
                   'type'=>0,
                   'office_id'=> $this->session->userdata('office_id')
                   ),
           
           );
            return $return;
    }
     public function getpatientdetails()
	{
		$this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$sdate=trim(htmlentities($this->input->post('sdate')));
	    	$var_array=array($sdate,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->getdatepatientdetails($var_array);
	    		if($getresult)
	    		{
	    			if($this->session->userdata('user_type')==4)
	    			{
	    				$cls='class="receiptioncls"';
	    			}
	    			else
	    			{
	    				$cls='';
	    			}
	    			$html='<table id="tableid" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>MRD NO</th>
                                    <th>Date Of Birth</th>
                                    <th>Mobile No</th>
                                    <th>A.Time</th>
                                    <th>Waiting time</th>
                                     <th>Follow Up</th>
                                      <th>White Cell</th>
                                     <th>Print</th>
                                     <th>Header Print</th>
                                     <th>New Print</th>
                                     <th>Cancel</th>
                                    <th>Edit</th>
                                    <th '.$cls.'>Delete</th>
                                    <th>Billing</th>
                                    <th>Status</th>
                                  </tr>
                                </thead><tbody>';
                     $sl=1;
                     $waiting_time=0;
	    			foreach($getresult as $data)
	    			{
	    				$checkTime = strtotime($data['appointment_time']);
	    				$checkTime =date('H:i:s', $checkTime);
	    				$loginTime = strtotime($data['appointment_time']);
	    				$time1 = new DateTime($data['appointment_time']);
						$time2 = new DateTime(date('H:i:s'));
						$interval = $time1->diff($time2);
						$diff= $interval->format('%s second(s)');
	    				$patient_registration_id=$data['patient_registration_id'];

	    				   $sqll2 = "select count(*) as cnt from patient_appointment  where 
	    				 patient_registration_id=$patient_registration_id";
				            $result_row1=$this->db->query($sqll2); 
				            $res1= $result_row1->result_array();
				            $cnt=$res1[0]['cnt'];
				            $new='';
				            if($cnt==1)
				            {
				            	$new='<span class="badge badge-danger">New</span>';
				            	$newclr="style='font-weight:bold;color:red;'";
				            }
				            else
				            {
								$newclr="style='font-weight:bold;color:blue;'";
				            }

	    				 $sqll = "select doctors_registration.name as doctorname from patient_appointment inner join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id where 
	    				 patient_registration_id=$patient_registration_id  order by patient_appointment.patient_appointment_id DESC";
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();
				            if($res)
				            {
				            	$doc=$res[0]['doctorname'];
				            }
				            else
				            {
				            	$doc='';
				            }
                            $patient_appointment_id=$data['patient_appointment_id'];
                            $btnval='';
                            if($data['pat_type']==2)
                            {
                            	$btnval='<span class="notification-tag badge badge-danger m-0">Telephone</span>';
                            }
                            elseif ($data['pat_type']==3) {
                            	$btnval='<span class="notification-tag badge badge-success m-0">VIP</span>';
                            }

                            $followup="<button type='button'  onclick=\"followupchk('$patient_registration_id');\" class='btn btn-icon btn-danger mr-1 mb-1'><i class='la la-calendar'></i></button>";

                            $whitecell="<button type='button'  onclick=\"whitecell('$patient_registration_id','$patient_appointment_id');\" class='btn btn-icon btn-success mr-1 mb-1'><i class='la la-compass'></i></button>";


	    				 $edit="<button type='button'  onclick=\"editdata('$patient_registration_id');\" class='btn btn-icon btn-warning mr-1 mb-1'><i class='la la-edit'></i></button>";

	    				  $print='<button onclick="printdata('.$patient_registration_id.','.$patient_appointment_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button>';

	    				   $hdprint='<button onclick="hdprintdata('.$patient_registration_id.',1)" type="button" class="btn btn-icon btn-success mr-1 mb-1"><i class="la la-print"></i></button>';
	    				   $hdprint1='<button onclick="hdprintdata('.$patient_registration_id.',2)" type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-print"></i></button>';

	    				$cancel='<button onclick="canceldata('.$patient_appointment_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la ft-x"></i></button>';

      					 $delete='<button onclick="deletedata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';
						$stat='Nill';
                         $sqll1 = "select confirm_flag,optho_action,doc_action from examination where patient_appointment_id=$patient_appointment_id and patient_registration_id=$patient_registration_id";
				            $result_row1=$this->db->query($sqll1); 
				            $res1= $result_row1->result_array ();
				            if($res1)
				            {
				            	$confirm_flag=$res1[0]['confirm_flag'];
				            	
				            	$doc_action=$res1[0]['doc_action'];
				            	if($confirm_flag==0)
				            	{
				            		$optho_action=$res1[0]['optho_action'];
				            		if($optho_action==0)
				            		{
				            			$stat='<p style="color:red;">Optometrists Inprogress</p>';
				            		}
				            		else
				            		{
				            			$stat='<p style="color:green;">Optometrists Completed</p>';
				            		}
				            	}

				            	if($confirm_flag==1)
				            	{
				            		$doc_action=$res1[0]['doc_action'];
				            		if($doc_action==0)
				            		{
				            			$stat='<p style="color:red;">Consultant Inprogress</p>';
				            		}
				            		else
				            		{
				            			$stat='<p style="color:green;">Consultant Completed</p>';
				            		}
				            	}
				            }
				           
                        $billing_time=$data['adate'].' '.$checkTime;
                        $waiting_time= $this->find_date_diff($billing_time,date('Y-m-d H:i:s')) ;
	    				$html.='<tr>
	    							<td>'.$sl.'</td>
	    							<td>'.$data['pateint_name'].' '.$new.'  '.$btnval.'</td>
	    							<td>'.$doc.'</td>
	    							<td><p '.$newclr.'>'.$data['mrdno'].'</p></td>
	    							<td>'.$data['dateofbirth'].'</td>
	    							<td>'.$data['mobileno'].'</td>
	    						
	    							
	    							<td>'.$data['appointment_time'].'</td>
	    							<td>'.$waiting_time.'</td>
	    							
	    							<td>'.$followup.'</td>
	    							<td>'.$whitecell.'</td>
	    							<td>'.$print.'</td>
	    							<td>'.$hdprint.'</td>
	    							<td>'.$hdprint1.'</td>
	    							<td>'.$cancel.'</td>
	    							<td>'.$edit.'</td>
	    							<td '.$cls.'>'.$delete.'</td>
	    							<td><button onclick="directbilling('.$patient_registration_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="ft-arrow-right"></i></button></td>
	    							<td>'.$stat.'</td>
	    						</tr>';
	    				$sl++;
	    			}
	    			$html.='</tbody></table>';

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
	 public function getpatientdetailsall()
	{
		$this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$sdate=trim(htmlentities($this->input->post('sdate')));
	    	$var_array=array($sdate,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->getdatepatientdetails($var_array);
	    		if($getresult)
	    		{
	    			if($this->session->userdata('user_type')==4)
	    			{
	    				$cls='class="receiptioncls"';
	    			}
	    			else
	    			{
	    				$cls='';
	    			}
	    			$html='<table id="tableidall" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>MRD NO</th>
                                    <th>Date Of Birth</th>
                                    <th>Mobile No</th>
                                    <th>A.Time</th>
                                    <th>Waiting time</th>
                                    <th>Status</th>
                                  </tr>
                                </thead><tbody>';
                     $sl=1;
                     $waiting_time=0;
	    			foreach($getresult as $data)
	    			{
	    				$checkTime = strtotime($data['appointment_time']);
	    				$checkTime =date('H:i:s', $checkTime);
	    				$loginTime = strtotime($data['appointment_time']);
	    				$time1 = new DateTime($data['appointment_time']);
						$time2 = new DateTime(date('H:i:s'));
						$interval = $time1->diff($time2);
						$diff= $interval->format('%s second(s)');
	    				$patient_registration_id=$data['patient_registration_id'];

	    				   $sqll2 = "select count(*) as cnt from patient_appointment  where 
	    				 patient_registration_id=$patient_registration_id";
				            $result_row1=$this->db->query($sqll2); 
				            $res1= $result_row1->result_array();
				            $cnt=$res1[0]['cnt'];
				            $new='';
				            if($cnt==1)
				            {
				            	$new='<span class="badge badge-danger">New</span>';
				            	$newclr="style='font-weight:bold;color:red;'";
				            }
				            else
				            {
								$newclr="style='font-weight:bold;color:blue;'";
				            }

	    				 $sqll = "select doctors_registration.name as doctorname from patient_appointment inner join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id where 
	    				 patient_registration_id=$patient_registration_id  order by patient_appointment.patient_appointment_id DESC";
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();
				            if($res)
				            {
				            	$doc=$res[0]['doctorname'];
				            }
				            else
				            {
				            	$doc='';
				            }
                            $patient_appointment_id=$data['patient_appointment_id'];
                            $btnval='';
                            if($data['pat_type']==2)
                            {
                            	$btnval='<span class="notification-tag badge badge-danger m-0">Telephone</span>';
                            }
                            elseif ($data['pat_type']==3) {
                            	$btnval='<span class="notification-tag badge badge-success m-0">VIP</span>';
                            }

                            $followup="<button type='button'  onclick=\"followupchk('$patient_registration_id');\" class='btn btn-icon btn-danger mr-1 mb-1'><i class='la la-calendar'></i></button>";

                            $whitecell="<button type='button'  onclick=\"whitecell('$patient_registration_id','$patient_appointment_id');\" class='btn btn-icon btn-success mr-1 mb-1'><i class='la la-compass'></i></button>";


	    				 $edit="<button type='button'  onclick=\"editdata('$patient_registration_id');\" class='btn btn-icon btn-warning mr-1 mb-1'><i class='la la-edit'></i></button>";

	    				  $print='<button onclick="printdata('.$patient_registration_id.','.$patient_appointment_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button>';

	    				   $hdprint='<button onclick="hdprintdata('.$patient_registration_id.',1)" type="button" class="btn btn-icon btn-success mr-1 mb-1"><i class="la la-print"></i></button>';
	    				   $hdprint1='<button onclick="hdprintdata('.$patient_registration_id.',2)" type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-print"></i></button>';

	    				$cancel='<button onclick="canceldata('.$patient_appointment_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la ft-x"></i></button>';

      					 $delete='<button onclick="deletedata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';
						$stat='Nill';
                         $sqll1 = "select confirm_flag,optho_action,doc_action from examination where patient_appointment_id=$patient_appointment_id and patient_registration_id=$patient_registration_id";
				            $result_row1=$this->db->query($sqll1); 
				            $res1= $result_row1->result_array ();
				            if($res1)
				            {
				            	$confirm_flag=$res1[0]['confirm_flag'];
				            	
				            	$doc_action=$res1[0]['doc_action'];
				            	if($confirm_flag==0)
				            	{
				            		$optho_action=$res1[0]['optho_action'];
				            		if($optho_action==0)
				            		{
				            			$stat='<p style="color:red;">Optometrists Inprogress</p>';
				            		}
				            		else
				            		{
				            			$stat='<p style="color:green;">Optometrists Completed</p>';
				            		}
				            	}

				            	if($confirm_flag==1)
				            	{
				            		$doc_action=$res1[0]['doc_action'];
				            		if($doc_action==0)
				            		{
				            			$stat='<p style="color:red;">Consultant Inprogress</p>';
				            		}
				            		else
				            		{
				            			$stat='<p style="color:green;">Consultant Completed</p>';
				            		}
				            	}
				            }
				           
                        $billing_time=$data['adate'].' '.$checkTime;
                        $waiting_time= $this->find_date_diff($billing_time,date('Y-m-d H:i:s')) ;
	    				$html.='<tr>
	    							<td>'.$sl.'</td>
	    							<td>'.$data['pateint_name'].' '.$new.'  '.$btnval.'</td>
	    							<td>'.$doc.'</td>
	    							<td><p '.$newclr.'>'.$data['mrdno'].'</p></td>
	    							<td>'.$data['dateofbirth'].'</td>
	    							<td>'.$data['mobileno'].'</td>
	    						
	    							
	    							<td>'.$data['appointment_time'].'</td>
	    							<td>'.$waiting_time.'</td>
	    							
	    						
	    							<td>'.$stat.'</td>
	    						</tr>';
	    				$sl++;
	    			}
	    			$html.='</tbody></table>';

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


	public function getpatientdetailsfol()
	{
		$this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$sdate=trim(htmlentities($this->input->post('sdate')));
	    	$var_array=array($sdate,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->getdatepatientdetailsfol($var_array);
	    		if($getresult)
	    		{

	    			$html='<table id="tablefolid" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>MRD NO</th>
                                    <th>Mobile No</th>
                                    <th>Follow Up Date</th>
                                    <th>Description</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead><tbody>';
                     $sl=1;
                     $waiting_time=0;
	    			foreach($getresult as $data)
	    			{
	    				$patient_followup_id=$data['patient_followup_id'];
	    				 $delete='<button onclick="foldeletedata('.$patient_followup_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';
	    				
	    				$html.='<tr>
	    							<td>'.$sl.'</td>
	    							<td>'.$data['pateint_name'].'</td>
	    							<td>'.$data['mrdno'].'</td>
	    							<td>'.$data['mobileno'].'</td>
	    							<td>'.$data['patient_followup_date'].'</td>
	    							<td>'.$data['description'].'</td>
	    							<td>'.$delete.'</td>
	    						</tr>';
	    				$sl++;
	    			}
	    			$html.='</tbody></table>';

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


	public function getpatientdetails1()
	{
		$this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$sdate=trim(htmlentities($this->input->post('sdate')));
	    	$var_array=array($sdate,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->getdatepatientdetailss($var_array);
	    		if($getresult)
	    		{
	    			$html='<table id="tableid" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>MRD NO</th>
                                    <th>Date Of Birth</th>
                                    <th>Mobile No</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Waiting time</th>
                                 
                                     <th>Print</th>
                                     <th>Examination</th>
                                   
                                  </tr>
                                </thead><tbody>';
                     $sl=1;
                     $waiting_time=0;
	    			foreach($getresult as $data)
	    			{
	    				$checkTime = strtotime($data['appointment_time']);
	    				$checkTime =date('H:i:s', $checkTime);
	    				$loginTime = strtotime($data['appointment_time']);
	    				$time1 = new DateTime($data['appointment_time']);
						$time2 = new DateTime(date('H:i:s'));
						$interval = $time1->diff($time2);
						$diff= $interval->format('%s second(s)');
	    				$patient_registration_id=$data['patient_registration_id'];
	    				 $sqll2 = "select count(*) as cnt from patient_appointment  where 
	    				 patient_registration_id=$patient_registration_id";
				            $result_row1=$this->db->query($sqll2); 
				            $res1= $result_row1->result_array();
				            $cnt=$res1[0]['cnt'];
				            $new='';
				            if($cnt==1)
				            {
				            	$new='<span class="badge badge-danger">New</span>';
				            }

	    				 $sqll = "select doctors_registration.name as doctorname from patient_appointment inner join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id where 
	    				 patient_registration_id=$patient_registration_id  order by patient_appointment.patient_appointment_id DESC";
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();
				            if($res)
				            {
				            	$doc=$res[0]['doctorname'];
				            }
				            else
				            {
				            	$doc='';
				            }
                            $patient_appointment_id=$data['patient_appointment_id'];
	    				 $edit="<button type='button'  onclick=\"editdata('$patient_registration_id');\" class='btn btn-icon btn-warning mr-1 mb-1'><i class='la la-edit'></i></button>";

	    				  $print='<button onclick="printdata('.$patient_registration_id.','.$patient_appointment_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button>';

	    				   $hdprint='<button onclick="printdataexamination('.$patient_registration_id.','.$patient_appointment_id.')" type="button" class="btn btn-icon btn-success mr-1 mb-1"><i class="ft-arrow-right"></i></button>';

      					 $delete='<button onclick="deletedata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';
                        $billing_time=$data['adate'].' '.$checkTime;
                        $waiting_time= $this->find_date_diff($billing_time,date('Y-m-d H:i:s')) ;
	    				$html.='<tr>
	    							<td>'.$sl.'</td>
	    							<td><a  onclick="printdataexamination('.$patient_registration_id.','.$patient_appointment_id.')">'.$data['pateint_name'].'</a> '.$new.'</td>
	    							<td>'.$doc.'</td>
	    							<td>'.$data['mrdno'].'</td>
	    							<td>'.$data['dateofbirth'].'</td>
	    							<td>'.$data['mobileno'].'</td>
	    						
	    							<td>'.$data['appointment_date'].'</td>
	    							<td>'.$data['appointment_time'].'</td>
	    							<td>'.$waiting_time.'</td>
	    							
	    							<td>'.$print.'</td>
	    							 <td align="center">'.$hdprint.'</td>
	    						</tr>';
	    				$sl++;
	    			}
	    			$html.='</tbody></table>';

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

	public function followuunew()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
	    	$getdata=$this->Common_model->getpatientMasterdetails($var_array);
	    	if($getdata)
	    	{
	    		$html='';
	    		foreach($getdata as $data)
	    		{
	    			$patid=$this->input->post('getid');
	    			
	    			$html='<form id="followupd_form" action="#" method="post"> 
							 <div id="div_modalf" class="modal fade" role="dialog">
							        <div class="modal-dialog modal-sm">
							        <!-- Modal content-->
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h4 class="modal-title"></h4>
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>
							                <div class="modal-body">
							                    <div class="row">
							                        <div class="col-lg-12 col-md-12" >
							                          <input type="hidden" name="patfolid" id="patfolid" value="'.$patid.'">
							                           <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 
							                                 
							                                 <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Patient Name: <span class="text-danger">*</span></label>
							                                         <input readonly type="text" class="form-control" value="'.$data['pname'].'">
							                                    </div>
							                                </div>

							                                <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Follow Up Date: <span class="text-danger">*</span></label>
							                                         <input  type="date" name="padate" id="padate" class="form-control fol_date" >
							                                    </div>
							                                </div>
							                                 
							                                
							                                  <div class="row col-md-12">
							                                    <div class="col-md-12 form-group">
							                                         <label for="lastname">Description: </label>
							                                         <textarea class="form-control" name="foldescription" id="foldescription"></textarea>
							                                    </div>
							                                </div>
							                                
							                        </div>
							                    </div>
							                </div>
							                <div class="modal-footer">
		    <button id="save" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" type="button" onclick="savefollowupnn()"><i class="fas fa-plus-square"></i>Save</button>
			<button type="button" id="mclose" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" data-dismiss="modal">Close</button>
							                </div>
							            </div>
							        </div>
							    </div>
							</form>';
							echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
	    		}
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



public function whitecellfn()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
	    	$getdata=$this->Common_model->getpatientMasterdetails($var_array);
	    	if($getdata)
	    	{
	    		$html='';
	    		foreach($getdata as $data)
	    		{
	    			$patid=$this->input->post('getid');
	    			$patapt=$this->input->post('patapt');
	    			
	    			$html='<form id="whitecell_form" action="#" method="post"> 
							 <div id="div_modalf" class="modal fade" role="dialog">
							        <div class="modal-dialog modal-sm">
							        <!-- Modal content-->
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h4 class="modal-title"></h4>
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>
							                <div class="modal-body">
							                    <div class="row">
							                        <div class="col-lg-12 col-md-12" >
							                          <input type="hidden" name="patreg" id="patreg" value="'.$patid.'">
							                          <input type="hidden" name="patapt" id="patapt" value="'.$patapt.'">
							                           <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 
							                                 
							                                 <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Patient Name: <span class="text-danger">*</span></label>
							                                         <input readonly type="text" class="form-control" value="'.$data['pname'].'">
							                                    </div>
							                                </div>

							                                <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">BP: <span class="text-danger">*</span></label>
							                                         <input  type="text" name="bp" id="bp" class="form-control" >
							                                    </div>
							                                </div>

							                                <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Sugar: <span class="text-danger">*</span></label>
							                                         <input  type="text" name="sugar" id="sugar" class="form-control" >
							                                    </div>
							                                </div>

							                                <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Temprature: <span class="text-danger">*</span></label>
							                                         <input  type="text" name="temprature" id="temprature" class="form-control" >
							                                    </div>
							                                </div>
							                                 
							                                 
							                                
							                                  <div class="row col-md-12">
							                                    <div class="col-md-12 form-group">
							                                         <label for="lastname">Description: </label>
							                                         <textarea class="form-control" name="whitedescription" id="whitedescription"></textarea>
							                                    </div>
							                                </div>
							                                
							                        </div>
							                    </div>
							                </div>
							                <div class="modal-footer">
		    <button id="save" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" type="button" onclick="savewhitecell()"><i class="fas fa-plus-square"></i>Save</button>
			<button type="button" id="mclose" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" data-dismiss="modal">Close</button>
							                </div>
							            </div>
							        </div>
							    </div>
							</form>';
							echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
	    		}
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


	 public function find_date_diff($fromdate,$todate) 
     {
        $date1=strtotime($fromdate);
        $date2=strtotime($todate);
        // Formulate the Difference between two dates
        $diff = abs($date1 - $date2); 

        $years = floor($diff / (365*60*60*24)); 


        $months = floor(($diff - $years * 365*60*60*24)
                                       / (30*60*60*24)); 

        $days = floor(($diff - $years * 365*60*60*24 - 
                     $months*30*60*60*24)/ (60*60*24));

        $hours = floor(($diff - $years * 365*60*60*24 
               - $months*30*60*60*24 - $days*60*60*24)
                                           / (60*60)); 


        $minutes = floor(($diff - $years * 365*60*60*24 
                 - $months*30*60*60*24 - $days*60*60*24 
                                  - $hours*60*60)/ 60); 

        $seconds = floor(($diff - $years * 365*60*60*24 
                 - $months*30*60*60*24 - $days*60*60*24
                        - $hours*60*60 - $minutes*60)); 
        $return="";
        if($years>0)
        {
           $return.="$years Year,";
        }
        if($months>0)
        {
          $return.="$months Month,"; 
        }
        if($days>0)
        {
          $return.="$days Days,";   
        }
        $hours=$hours.'Hours';
        $minutes=$minutes.'Minutes';
         $return.="$hours:$minutes";
         return $return;
      
    }
    public function getgender()
	{
		$this->form_validation->set_rules('getid', 'Patient Title', 'trim|required|min_length[1]|max_length[6]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$getid=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($getid,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->checkval($var_array);
	    	if($chk_duplication[0]['cnt']>0)
	    	{
	    		$getresult=$this->Patients_registration_model->getgender($var_array);
	    		if($getresult)
	    		{
			      echo json_encode(array('msg' =>$getresult,'error'=>'','error_message' =>''));
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
	public function getappointmentopd()
	{
		$this->form_validation->set_rules('getid', 'Appointment Type', 'trim|required|min_length[1]|max_length[6]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$getid=trim(htmlentities($this->input->post('getid')));
	    	$sel=trim(htmlentities($this->input->post('sel')));
	    	if($sel==0)
	    	{
	    		$chkv='';
	    	}
	    	else
	    	{
	    		$chkv='1';
	    	}
	    	$var_array=array($getid,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->checkappointmentval($var_array);
	    	if($chk_duplication[0]['cnt']>0)
	    	{
	    		$getresult=$this->Patients_registration_model->getappointment($var_array);
	    		if($getresult)
	    		{
	    			$html='';
	    			$opd='';
	    			foreach($getresult as $data)
	    			{
	    				$opd.='<option value="'.$data['opdcharge_id'].'">'.$data['name'].' / '.$data['amount'].'</option>';
	    			}
	    			$html='<div id="div_modal'.$chkv.'" class="modal fade" role="dialog" style="margin-top: 10%;">
							        <div class="modal-dialog modal-sm">
							        <!-- Modal content-->
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h4 class="modal-title"></h4>
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>
							                <div class="modal-body">
							                    <div class="row">
							                        <div class="col-lg-12 col-md-12" >
							                               <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">OPD Charge: <span class="text-danger">*</span></label>
							                                        <select class="form-control select2" name="opdcharge_id" id="opdcharge_id">'.$opd.'</select>
							                                    </div>
							                                </div>
							                        </div>
							                    </div>
							                </div>
							                <div class="modal-footer">
		<button id="save" class="btn btn-primary btn-sm" type="button"  data-dismiss="modal"><i class="fas fa-plus-square"></i>Submit</button>
	    <button type="button" id="mclose" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
							                </div>
							            </div>
							        </div>
							    </div>
							</form>';
			      echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
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
	public function smsgateway($fname,$lname,$mobileno,$temp_id,$msg)
	{
		
	}
    public function savedata()
	{

		$this->form_validation->set_rules('patient_title_id', 'Title', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[40]');
		//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[1]|max_length[40]');
		if($this->input->post('pat_type')==1)
		{
		$this->form_validation->set_rules('gender_id', 'Gender', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('agey', 'Age Year', 'trim|required|min_length[1]|max_length[4]|numeric');
		//$this->form_validation->set_rules('agem', 'Age Month', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
		//$this->form_validation->set_rules('city_id', 'City', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('source', 'Source', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|required|min_length[10]|max_length[15]');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[1]|max_length[100]');
		//$this->form_validation->set_rules('occupation', 'Occupation', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('referral_masters_id', 'Referral name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('insurance_company_id', 'OPD Insurance Name', 'trim|required|min_length[1]|max_length[10]|numeric');
	//	$this->form_validation->set_rules('patient_category_id', 'Patient Category', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('doctor_id', 'Select Doctor', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('print', 'Print', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('modeofpay_id', 'Modeofpay', 'trim|required|min_length[1]|max_length[10]|numeric');
   	   }
		//$this->form_validation->set_rules('opdcharge_id', 'OPD Charge', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('logo','Patient Image','callback_file_check');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	$var_array=array($mobileno,$this->session->userdata('office_id'));
	    	// $chk_duplication=$this->Patients_registration_model->checkduplicationpatient($var_array);
	    	// if($chk_duplication[0]['cnt']==0)
	    	// {

	    		
	    		$data=$this->fetch_data();
	    		$getresult=$this->Patients_registration_model->savedata($data);
	    		if($getresult)
	    		{
	    			$patient_registration_id=$this->db->select('max(patient_registration_id) as patient_registration_id')
                         ->from('patient_registration')
                         ->where(array('office_id'=>$this->session->office_id))
                         ->get()->row()->patient_registration_id;
                if($patient_registration_id>0)
                {
                    $patient_registration_id=$patient_registration_id;
                } else {
                    $patient_registration_id= $patient_registration_id;
                   
                }

                $patient_appointment_id=$this->db->select('max(patient_appointment_id) as patient_appointment_id')
                         ->from('patient_appointment')
                         ->where(array('1'=>1))
                         ->get()->row()->patient_appointment_id;
                if($patient_appointment_id>0)
                {
                    $patient_appointment_id=$patient_appointment_id;
                } else 
                {
                    $patient_appointment_id= $patient_appointment_id;
                   
                }
                $fname=trim(htmlentities($this->input->post('fname')));
                $lname=trim(htmlentities($this->input->post('lname')));
                $tempid='1207164035160750964';
                $office_id=$this->session->office_id;

                $mrdno=$this->db->select('mrdno')
                         ->from('patient_registration')
                         ->where(array('patient_registration_id'=>$patient_registration_id))
                         ->get()->row()->mrdno;

                         $lname.= ' MRD NO-'.$mrdno;

		       $office=$this->db->get_where('office',"office_id=$office_id")->row();
		       $cmbl=$office->printable_company_mobile;
		       $msg=urlencode('வணக்கம், '.$fname.' '.$lname.' அவர்களை இமயம் ஸ்பெசாலிட்டி மருத்துவமனைக்கு வரவேற்கிறோம். எப்பொழுதும் உங்கள் திருப்தியே எங்கள் நோக்கம். எங்களை பார்வையிட்டதற்கு நன்றி.நோயாளி ஐடி மற்றும் பெயரை குறுந்தகவல் அல்லது வாட்ஸ் ஆப் மெசஞ்சர் மூலம் அனுப்பி மருத்துவருடன் அடுத்த சந்திப்பை உறுதிசெய்யலாம்.கைபேசி '.$cmbl.' IMAYAM');
		       $host_tvm = explode('.',$_SERVER['HTTP_HOST'])[0];
		       if($host_tvm=='emr')
		       {
                $this->smsgateway($fname,$lname,$mobileno,$tempid,$msg);
               }
                
			      echo json_encode(array('msg' =>'Saved Successfully','patient_registration_id' =>$patient_registration_id,'patient_app_id' =>$patient_appointment_id,'error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
	    		}
	    	// }
	    	// else
	    	// {
	     //          echo json_encode(array('msg'=>'','error' =>'This Mobile No already Used','error_message' =>''));
	    	// }
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	public function updatedata()
	{
		$this->form_validation->set_rules('id', 'Edit ID', 'trim|required|min_length[1]|max_length[1000]|numeric');
		$this->form_validation->set_rules('patient_title_id', 'Title', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[40]');
		//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[1]|max_length[40]');
		$this->form_validation->set_rules('gender_id', 'Gender', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('agey', 'Age Year', 'trim|required|min_length[1]|max_length[4]|numeric');
		//$this->form_validation->set_rules('agem', 'Age Month', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
		$this->form_validation->set_rules('city_id', 'City', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[1]|max_length[100]');
		//$this->form_validation->set_rules('source', 'Source', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('occupation', 'Occupation', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('referral_masters_id', 'Referral name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('insurance_company_id', 'OPD Insurance Name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('patient_category_id', 'Patient Category', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('doctor_id', 'Select Doctor', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('print', 'Print', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('opdcharge_id', 'OPD Charge', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('logo','Patient Image','callback_file_check');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$edit_id=trim(htmlentities($this->input->post('id')));
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	// $var_array=array($edit_id,$mobileno,$this->session->userdata('office_id'));
	    	// $chk_duplication=$this->Patients_registration_model->editcheck($var_array);
	    	// if($chk_duplication[0]['cnt']==0)
	    	// {
	    		$data=$this->fetch_data();
	    		$getresult=$this->Patients_registration_model->updatedata($data,$edit_id);
	    		if($getresult)
	    		{
		    		echo json_encode(array('msg'=>'Updated Successfully','error' =>'','error_message' =>''));
	    		}
	    		else
	    		{
	    			echo json_encode(array('msg'=>'','error' =>'Failed to Update','error_message' =>''));
	    		}
	    	// }
	    	// else
	    	// {
	    	// 	echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
	    	// }
	    }
	    else
	    {
	    echo json_encode(array('msg'=>'','error' =>'','error_message' =>$this->form_validation->error_array()));
	    }
	}

	public function editdata()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
	    	$getpateintdata=$this->Patients_registration_model->getpatienteditdata($var_array);
	    	//print_r($getpateintdata);exit;
	    	if($getpateintdata)
	    	{
	    		echo json_encode(array('msg'=>$getpateintdata,'error' =>'','error_message' =>''));
	    	}
	    	else
	    	{
	    		echo json_encode(array('msg'=>'','error' =>'No data Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	    	echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	 public function file_check($parameter){
        
         if(isset($_FILES['logo']['name']))
         {
        $str=$_FILES['logo']['name'];
        $allowed_mime_type_arr = array('image/jpeg','image/jpg','image/png');
        $mime = get_mime_by_extension($str);
        if(isset($str) && $str!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                
                return $this->upload();
            }else{
                $this->form_validation->set_message('file_check', 'Please select only jpeg/jpg/png file.');
                return false;
            }
        }else{
            if($this->input->post('profile_pic'))
            {
                $this->session->set_flashdata('profile_pic',$this->input->post('profile_pic'));
                return true;
            }
             $this->session->set_flashdata('profile_pic','temp.jpg');
             return true;
        }
         }  else {
             $this->session->set_flashdata('profile_pic','temp.jpg');
             return true;
         }
    }
    private function upload() {
		$host_tvm = 'erp1';
        $config['upload_path']   = 'images/profile/'; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $config['max_size']      = 2000; 
        $config['file_name']  = $host_tvm;
        // $config['max_width']     = 1024; 
        // $config['max_height']    = 768;  
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('logo')) {
            $this->form_validation->set_message('file_check', $this->upload->display_errors());
            return false;
           }

        else { 
            
              $this->session->set_flashdata('profile_pic',$this->upload->data('file_name'));
             return TRUE;
   }
}

     public function deletedata()
	{
		$this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$delete_id=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($delete_id,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->deletecheck($var_array);
	    	if($chk_duplication[0]['cnt']==1)
	    	{
	    		$getresult=$this->Patients_registration_model->deletedata($delete_id);
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
	            echo json_encode(array('msg'=> '', 'error'=> 'Delete ID Not Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	      echo json_encode(array('msg'=>'','error'=>'','error_message' => $this->form_validation->error_array()));
	    }
	}
	 public function foldeletedata()
	{
		$this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$delete_id=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($delete_id,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->foldeletedata($delete_id);
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

	 public function canceldata()
	{
		$this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$delete_id=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($delete_id,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->canceldatamodel($delete_id);
	    		if($getresult)
	    		{
			       echo json_encode(array('msg'=>'Appointment Cancel Successfully','error'=>'','error_message' =>''));
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
    private function fetch_data_followup() 
    {
    	  $return=array(
             "appointment_details"=>array(
                "patient_registration_id"=>$this->input->post('patient_registration_id'),
                "appointment_date"=>date('Y-m-d',strtotime($this->input->post('followup_appointment_date'))),
                 "appointment_time"=>($this->input->post('followup_appointment_time'))?$this->input->post('followup_appointment_time'):date('H:i:s'),
                 "patient_category_id"=>$this->input->post('followup_patient_category_id'),
                 "emergency"=>$this->input->post('followup_emergency_id'),
                 "doctor_id"=>$this->input->post('followup_doctor_id'),
                 "apponitment_type_id"=>$this->input->post('followup_appointment_type_id'),
                 "appointment_opd_charge_id"=>$this->input->post('opdcharge_id'),
                 "modeofpay_id"=>$this->input->post('followup_modeofpay_id'),
                 "billing"=>$this->input->post('followup_billing'),
                 "source"=>$this->input->post('followup_source'),
                 "description"=>$this->input->post('followup_description'),
                 "login_id"=>$this->session->userdata('login_id')
             ),
             "bill_number"=>array(
                   'type'=>0,
                   'office_id'=> $this->session->userdata('office_id')
                   ),
           
           );
            return $return;
       
    }
	 public function savefollowup()
	{
		$this->form_validation->set_rules('patient_registration_id', 'Patient ID', 'trim|required|min_length[1]|max_length[100000]|numeric');
		$this->form_validation->set_rules('followup_doctor_id', 'Doctor', 'trim|required|min_length[1]|max_length[40000]|numeric');
		$this->form_validation->set_rules('followup_appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[400000]|numeric');
		$this->form_validation->set_rules('opdcharge_id', 'Appointment OPD Charge
', 'trim|required|min_length[1]|max_length[100000]|numeric');
	//	$this->form_validation->set_rules('followup_emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[1]|numeric');
		//$this->form_validation->set_rules('followup_source', 'Source', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('followup_appointment_date', 'Appointment Date', 'trim|required');
		$this->form_validation->set_rules('followup_appointment_time', 'Appointment Time', 'trim|required');
		//$this->form_validation->set_rules('followup_description', 'Description', 'trim|required');
		
	    if($this->form_validation->run() == TRUE)
	    {
	    	$checkupdate=$this->Patients_registration_model->checkfollowupmodel($this->input->post('patient_registration_id'),$this->input->post('followup_appointment_date'));
	    	if($checkupdate[0]['cnt']==0)
	    	{
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	$var_array=array($mobileno,$this->session->userdata('office_id'));
	    	
	    		$data=$this->fetch_data_followup();
	    		$getresult=$this->Patients_registration_model->savedatafollowup($data);
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
	    		echo json_encode(array('msg' =>'','error'=> 'Already Saved Appointment same date in this Patient','error_message' =>''));
	    	}
	    	
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	 private function folfetch_data() 
    {
    	
        $office_id=$this->session->office_id;
        return array(
        	'patient_registration_id'=>trim($this->input->post('patfolid')),
        	'patient_followup_date'=>trim($this->input->post('padate')),
            'description'=>trim($this->input->post('foldescription')),
            'parent_id'=>$this->session->userdata('parent_id'),
            'login_id'=>$this->session->userdata('login_id'),
            'office_id'=> $this->session->userdata('office_id')
           );
    }
    private function whitecellfetch_data() 
    {
    	
        $office_id=$this->session->office_id;
        return array(
        	'patient_registration_id'=>trim($this->input->post('patreg')),
        	'patient_appointment_id'=>trim($this->input->post('patapt')),
        	'bp'=>trim($this->input->post('bp')),
        	'sugar'=>trim($this->input->post('sugar')),
            'temprature'=>trim($this->input->post('temprature')),
            'description'=>trim($this->input->post('whitedescription')),
            'parent_id'=>$this->session->userdata('parent_id'),
            'login_id'=>$this->session->userdata('login_id'),
            'office_id'=> $this->session->userdata('office_id')
           );
    }

	public function savefollowupnew()
	{
		$this->form_validation->set_rules('patfolid', 'Patient ID', 'trim|required|min_length[1]|max_length[100000]|numeric');
		$this->form_validation->set_rules('padate', 'Date', 'trim|required');
		$this->form_validation->set_rules('foldescription', 'Description', 'trim');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$patfolid=trim(htmlentities($this->input->post('patfolid')));
	    	$padate=trim(htmlentities($this->input->post('padate')));
	    	$var_array=array($patfolid,$padate,$this->session->userdata('office_id'));

	    	$chk_duplication=$this->Patients_registration_model->chksavefoldata($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    	
	    		$data=$this->folfetch_data();
	    		$getresult=$this->Patients_registration_model->savefoldata($data);
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
	    		 echo json_encode(array('msg' =>'','error'=> 'Already Saved followup in Same Date','error_message' =>''));
	    	}
	    	
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	public function savewhitecellnew()
	{
		$this->form_validation->set_rules('patreg', 'Patient ID', 'trim|required|min_length[1]|max_length[100000]|numeric');
		$this->form_validation->set_rules('patapt', 'Date', 'trim|required');
		$this->form_validation->set_rules('bp', 'BP', 'trim|required');
		$this->form_validation->set_rules('sugar', 'sugar', 'trim|required');
		$this->form_validation->set_rules('temprature', 'temprature', 'trim|required');
		$this->form_validation->set_rules('whitedescription', 'Description', 'trim');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$patfolid=trim(htmlentities($this->input->post('patreg')));
	    	$patapt=trim(htmlentities($this->input->post('patapt')));
	    	$var_array=array($patfolid,$patapt,$this->session->userdata('office_id'));

	    	$chk_duplication=$this->Patients_registration_model->chksavewhitecell($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    	
	    		$data=$this->whitecellfetch_data();
	    		$getresult=$this->Patients_registration_model->saveehitedata($data);
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
	    		 echo json_encode(array('msg' =>'','error'=> 'Already Saved Whitecell in Same Appointment','error_message' =>''));
	    	}
	    	
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	public function print_appointment() 
  {
    //   echo $this->input->post('printpatient_apt_id');exit;
      $this->Patients_registration_model->print_bill($this->input->post('printpatient_registration_id'),$this->session->userdata('office_id'),$this->input->post('printpatient_apt_id'));
  }
  public function print_appointmenthd() 
  {
      $this->Patients_registration_model->print_billhd($this->input->post('printpatient_registration_id'),$this->input->post('typeprint'),$this->session->userdata('office_id'));
  }

	
}
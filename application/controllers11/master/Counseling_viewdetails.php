<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counseling_viewdetails extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        $this->load->model('Counseling_viewmodel');
        $this->load->model('Common_model');
      
    }
    public function ajax_call(){
        $param=$_REQUEST;
        $response=$this->Counseling_viewmodel->ajax_call($param);
        echo json_encode($response);
 }
	public function index()
	{
      $data['title']='EMR::Counseling View Details';
      $data['activecls']='Counseling_viewdetails';
      $var_array=array($this->session->userdata('office_id'));
      $data['mrdnos']=$this->Common_model->getpateintmrdnos($var_array);
      $data['departments']=$this->Common_model->getdepartment($var_array);
      $data['insurancecompanys']=$this->Common_model->getinsurance_company($var_array);
      $var_arraysf=array(2,$this->session->userdata('office_id'));
      $data['surgeon']=$this->Common_model->getdoctorval($var_arraysf);
      $var_arraysf=array(3,$this->session->userdata('office_id'));
      $data['anthes']=$this->Common_model->getdoctorval($var_arraysf);
      $content=$this->load->view('master/counseling_view',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}
    private function fetch_data() 
    {
    	$status=trim($this->input->post('status'));
        if(!$this->input->post('status'))
        {
            $status=0;
        }
        $office_id=$this->session->office_id;
        return array(
            'name'=>trim($this->input->post('name')),
            'amount'=>trim($this->input->post('amount')),
            'description'=>trim($this->input->post('description')),
            'department_id'=>trim($this->input->post('department_id')),
            'status'=>$status,
            'parent_id'=>$this->session->userdata('parent_id'),
            'login_id'=>$this->session->userdata('login_id'),
            'office_id'=> $this->session->userdata('office_id')
           );
    }

    public function savedata()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required|min_length[1]|max_length[30]|numeric');
    	$this->form_validation->set_rules('description', 'Description', 'trim');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$name=trim(htmlentities($this->input->post('name')));
	    	$description=trim(htmlentities($this->input->post('description')));
	    	$status=trim(htmlentities($this->input->post('status')));
	    	$var_array=array($name,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Counseling_viewmodel->checkingval($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    		$data=$this->fetch_data();
	    		$getresult=$this->Counseling_viewmodel->savedata($data);
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
	              echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
	    	}
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	public function getallapp()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	   $chargeid=$this->input->post('getid');
	    		if($this->input->post('getid')==2)
	    		{
	    			$idname='sur';
	    			$opname='Surgery';
	    			$clsname="style='display:black;'";
	    		}
	    		elseif($this->input->post('getid')==3)
	    		{
	    			$idname='las';
	    			$opname='las';
	    			$clsname="style='display:mone;'";
	    		}
	    		elseif($this->input->post('getid')==4)
	    		{
	    			$idname='inj';
	    			$opname='inj';
	    			$clsname="style='display:mone;'";
	    		}
	    		$datt=$this->input->post($idname.'_date');
	    	$var_array=array($this->input->post('getid'),$this->input->post($idname.'_date'),$this->session->userdata('office_id'));
	    	$getdata=$this->Counseling_viewmodel->getallappmodel($var_array);
	    	if($getdata)
	    	{
	    		$url='Counseling_viewdetails/printdata/'.$chargeid.'/'.$datt;
	    		
	    		 $html='<div style="float:Right"><a href="'.$url.'" target="_blank"><button type="button" class="btn btn-danger"><i class="la la-print"></i></button></a></div><div class="table-responsive"><table id="'.$idname.'_datatable" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>MRD NO</th>
                                    <th>Gender/Age</th>
                                    <th>Mobile No</th>
                                    <th>Type Of '.$opname.'</th>
                                    <th>Particulars</th>
                                    <th>EYE</th>
                                    <th>A Date</th>
                                    <th '.$clsname.'>Operating surgeon</th>
                                    <th>Anesthesia Name</th>
                                    <th>Cancel</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead><tbody>';
            	$sl=1;
            	$opnn=$anthesia='';
	    		foreach ($getdata as $data) 
	    		{
	    			if($data['gender']==1)
	    			{
	    				$gen='Male';
	    			}
	    			elseif ($data['gender']==2) {
	    				$gen='Female';
	    			}
	    			else
	    			{
	    				$gen='Transgender';
	    			}
	    			if($data['operating_surgon'])
	    			{
		    			 $sqll = "select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=".$data['operating_surgon'];
					            $result_row=$this->db->query($sqll); 
					            $res= $result_row->result_array ();
					            if($res)
					            {
					            	$opsurname=$res[0]['doctorname'];
					            }
					            else
					            {
					            	$opsurname='';
					            }
				    }
					    if($data['typeof_anthesia'])
					    {
				             $sqll = "select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=".$data['typeof_anthesia'];
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();
				            if($res)
				            {
				            	$anthesia=$res[0]['doctorname'];
				            }
				            else
				            {
				            	$anthesia='';
				            }
				        }
				        
				            if($this->input->post('getid')==2)
				            {
				            	if($data['typeof_anthesia'])
				            	{
					            	$sqll = "select name  from doctors_registration where doctors_registration_id=".$data['operating_surgon'];
					            	$result_row=$this->db->query($sqll); 
						            $res= $result_row->result_array ();
						            if($res)
						            {
						            	$opnn=$res[0]['name'];
						            }
						            else
						            {
						            	$opnn='';
						            }
					            }
				            }
				$getparti=$this->Counseling_viewmodel->getdatasurgerymdl($data['typeof_surgery_id'],$this->input->post('getid'),$data['particular_type'],$this->session->userdata('office_id'));
				 
                  if($getparti)
                  {
	                  $parname=$getparti[0]['name'];
	                  $amt=$getparti[0]['amount'];
	              }
	              else
	              {
	              	$parname='';
	              	$amt='';
	              }
	              if($data['eye']==1)
	              {
	              	$eyee='Left';
	              }
	              elseif($data['eye']==2)
	              {
	              	$eyee='Right';
	              }
	              elseif($data['eye']==3)
	              {
	              	$eyee='Both';
	              }

	    			$html.='<tr>
	    						<td>'.$sl.'</td>
	    						<td>'.$data['pateint_name'].'</td>
	    						<td>'.$data['mrdno'].'</td>
	    						<td>'.$gen.' /'.$data['ageyy'].'</td>
	    						<td>'.$data['mobileno'].'</td>
	    						<td>'.$data['opname'].'</td>
	    						<td>'.$parname.' - '.$amt.'</td>
	    						<td>'.$eyee.'</td>
	    						<td>'.$data['admission_date'].'</td>
	    						<td '.$clsname.'>'.$opnn.'</td>
	    						<td>'.$anthesia.'</td>
	    						<td><button type="button" class="btn btn-warning" onclick="cancel('.$data['preoperative_appointment_id'].')"><i class="la ft-x"></i></button></td>
	    						<td><button type="button" class="btn btn-danger" onclick="deletedata('.$data['preoperative_appointment_id'].')"><i class="la ft-trash"></i></button></td>
	    			        </tr>';
	    			        $sl++;
	    		}
	    		$html.='</tbody></table></div>';
	    		echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
	    	}
	    	else
	    	{
	    		echo json_encode(array('msg'=>'No Data Found','error' =>'','error_message' =>''));
	    	}
	    	
			
	    		
	    	
	    }
	    else
	    {
	    	echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	 public function canceldata()
  {
    $this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $cancel_id=trim(htmlentities($this->input->post('getid')));
        $var_array=array($cancel_id,$this->session->userdata('office_id'));
          $getresult=$this->Counseling_viewmodel->canceldata($cancel_id);
          if($getresult)
          {
             echo json_encode(array('msg'=>'Cancel Successfully','error'=>'','error_message' =>''));
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

   public function deletedata()
  {
    $this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $delete_id=trim(htmlentities($this->input->post('getid')));
        $var_array=array($delete_id,$this->session->userdata('office_id'));
          $getresult=$this->Counseling_viewmodel->deletedata($delete_id);
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

   public function printdata($chargeid,$sum_todate)
  {
	    		if($chargeid==2)
	    		{
	    			$idname='sur';
	    			$opname='Surgery';
	    			$clsname="style='display:black;'";
	    		}
	    		
	    	$var_array=array($chargeid,$sum_todate,$this->session->userdata('office_id'));
	    	$getdata=$this->Counseling_viewmodel->getallappmodel($var_array);
	    	$htmld='';
	    	if($getdata)
	    	{
	    		$url='Counseling_viewdetails/printdata/'.$chargeid.'/'.$datt;
	    		
	    		 $htmld='<div class="table-responsive"><table style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:0.6px solid black;" border="1">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>MRD NO</th>
                                    <th>Gender/Age</th>
                                    <th>Mobile No</th>
                                    <th>Type Of '.$opname.'</th>
                                    <th>Particulars</th>
                                    <th>EYE</th>
                                    <th>A Date</th>
                                    <th '.$clsname.'>Operating surgeon</th>
                                    <th>Anesthesia Name</th>
                                  
                                  </tr>
                                </thead><tbody>';
            	$sl=1;
            	$opnn=$anthesia='';
	    		foreach ($getdata as $data) 
	    		{
	    			if($data['gender']==1)
	    			{
	    				$gen='Male';
	    			}
	    			elseif ($data['gender']==2) {
	    				$gen='Female';
	    			}
	    			else
	    			{
	    				$gen='Transgender';
	    			}
	    			if($data['operating_surgon'])
	    			{
		    			 $sqll = "select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=".$data['operating_surgon'];
					            $result_row=$this->db->query($sqll); 
					            $res= $result_row->result_array ();
					            if($res)
					            {
					            	$opsurname=$res[0]['doctorname'];
					            }
					            else
					            {
					            	$opsurname='';
					            }
				    }
					    if($data['typeof_anthesia'])
					    {
				             $sqll = "select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=".$data['typeof_anthesia'];
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();
				            if($res)
				            {
				            	$anthesia=$res[0]['doctorname'];
				            }
				            else
				            {
				            	$anthesia='';
				            }
				        }
				        
				            if($chargeid==2)
				            {
				            	if($data['typeof_anthesia'])
				            	{
					            	$sqll = "select name  from doctors_registration where doctors_registration_id=".$data['operating_surgon'];
					            	$result_row=$this->db->query($sqll); 
						            $res= $result_row->result_array ();
						            if($res)
						            {
						            	$opnn=$res[0]['name'];
						            }
						            else
						            {
						            	$opnn='';
						            }
					            }
				            }
				$getparti=$this->Counseling_viewmodel->getdatasurgerymdl($data['typeof_surgery_id'],$chargeid,$data['particular_type'],$this->session->userdata('office_id'));
				 
                  if($getparti)
                  {
	                  $parname=$getparti[0]['name'];
	                  $amt=$getparti[0]['amount'];
	              }
	              else
	              {
	              	$parname='';
	              	$amt='';
	              }
	              if($data['eye']==1)
	              {
	              	$eyee='Left';
	              }
	              elseif($data['eye']==2)
	              {
	              	$eyee='Right';
	              }
	              elseif($data['eye']==3)
	              {
	              	$eyee='Both';
	              }

	    			$htmld.='<tr>
	    						<td>'.$sl.'</td>
	    						<td>'.$data['pateint_name'].'</td>
	    						<td>'.$data['mrdno'].'</td>
	    						<td>'.$gen.' /'.$data['ageyy'].'</td>
	    						<td>'.$data['mobileno'].'</td>
	    						<td>'.$data['opname'].'</td>
	    						<td>'.$parname.' - '.$amt.'</td>
	    						<td>'.$eyee.'</td>
	    						<td>'.$data['admission_date'].'</td>
	    						<td '.$clsname.'>'.$opnn.'</td>
	    						<td>'.$anthesia.'</td>
	    						
	    			        </tr>';
	    			        $sl++;
	    		}
	    		$htmld.='</tbody></table></div>';
	    	}

  
     $data['htmldata']=$htmld;

     $html=$this->load->view("master/couselingreport",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];

            $mpdf = new \Mpdf\Mpdf($print_config);
            $pdfFilePath ="print-".time().".pdf"; 
            $labName='';
            $mpdf->SetWatermarkText($labName,0.03);
            $mpdf->showWatermarkText = true;
            $mpdf -> SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
  }


}

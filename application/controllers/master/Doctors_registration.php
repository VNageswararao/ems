<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_registration extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        $this->load->model('Doctors_registration_model');
      
    }
    public function ajax_call(){
        $param=$_REQUEST;
        $response=$this->Doctors_registration_model->ajax_call($param);
        echo json_encode($response);
 }
	public function index()
	{
      $data['title']='EMR::Doctors_registration';
      $data['activecls']='Doctors_registration';
      $content=$this->load->view('master/doctors_registration',$data,true);
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
            'mobileno'=>trim($this->input->post('mobileno')),
            'specialist'=>trim($this->input->post('specialist')),
            'designation'=>trim($this->input->post('designation')),
            'description'=>trim($this->input->post('description')),
            'regno'=>trim($this->input->post('regno')),
            'dgs'=>trim($this->input->post('dgs')),
            'status'=>$status,
            'parent_id'=>$this->session->userdata('parent_id'),
            'login_id'=>$this->session->userdata('login_id'),
            'office_id'=> $this->session->userdata('office_id')
           );
    }

    public function savedata()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|min_length[1]|max_length[30]|numeric');
		$this->form_validation->set_rules('specialist', 'specialist', 'trim|required|min_length[1]|max_length[30]');
    	$this->form_validation->set_rules('description', 'Description', 'trim');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$name=trim(htmlentities($this->input->post('name')));
	    	$description=trim(htmlentities($this->input->post('description')));
	    	$status=trim(htmlentities($this->input->post('status')));
	    	$var_array=array($name,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Doctors_registration_model->checkingval($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    		$data=$this->fetch_data();
	    		$getresult=$this->Doctors_registration_model->savedata($data);
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

	public function editdata()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
	    	$getdata=$this->Doctors_registration_model->geteditdata($var_array);
	    	if($getdata)
	    	{
	    		$html='';
	    		foreach($getdata as $data)
	    		{
	    			$sel1='';
	    			$sel2='';
	    			$s1=$s2=$s3='';
	    			if($data['status']==1)
	    			{
	    				$sel1='selected';
	    			}
	    			if($data['status']==0)
	    			{
	    				$sel2='selected';
	    			}
	    			if($data['designation']==1)
	    			{
	    				$s1='selected';
	    			}
	    			if($data['designation']==2)
	    			{
	    				$s2='selected';
	    			}
	    			if($data['designation']==3)
	    			{
	    				$s3='selected';
	    			}
	    			
	    			
	    			$html='<form id="edit_form" action="#" method="post"> 
							 <div id="div_modal" class="modal fade" role="dialog">
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
							                          <input type="hidden" name="id" id="id" value="'.$data['doctors_registration_id'].'">
							                           <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="'.$this->security->get_csrf_hash().'"> 

							                             <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Name: <span class="text-danger">*</span></label>
							                                        <select class="form-control" name="designation" id="designation">
							                                        	<option value="">Select Designation</option>
							                                        	<option value="1" '.$s1.'>Consultant</option>
						                                                <option value="2" '.$s2.'>Surgery</option>
						                                                <option value="3" '.$s3.'>Anesthesia</option>
							                                        </select>
							                                    </div>
							                                </div>
							                                 
							                                 <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Name: <span class="text-danger">*</span></label>
							                                         <input type="text" name="name" id="name" class="form-control" value="'.$data['name'].'">
							                                    </div>
							                                </div>

							                                  <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Mobile No: <span class="text-danger">*</span></label>
							                                         <input type="text" name="mobileno" id="mobileno" class="form-control" value="'.$data['mobileno'].'">
							                                    </div>
							                                </div>

							                                  <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">specialist: <span class="text-danger">*</span></label>
							                                         <input type="text" name="specialist" id="specialist" class="form-control" value="'.$data['specialist'].'">
							                                    </div>
							                                </div>
							                                 <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Registration No: <span class="text-danger">*</span></label>
							                                         <input type="text" name="regno" id="regno" class="form-control" value="'.$data['regno'].'">
							                                    </div>
							                                </div>
							                                 <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">Digital Signature: <span class="text-danger">*</span></label>
							                                         <input type="text" name="dgs" id="dgs" class="form-control" value="'.$data['dgs'].'">
							                                    </div>
							                                </div>

							                                 
							                                
							                                  <div class="row col-md-12">
							                                    <div class="col-md-12 form-group">
							                                         <label for="lastname">Description: </label>
							                                         <textarea class="form-control" name="description" id="description">'.$data['description'].'</textarea>
							                                    </div>
							                                </div>
							                                 <div class="row col-md-12">
							                                     <div class="col-md-12 form-group">
							                                         <label for="lastname">Status: </label>
							                                        <select class="form-control" name="status" id="status">
							                                            <option value="1" '.$sel1.'>Active</option>
							                                            <option value="0" '.$sel2.'>De-Active</option>
							                                        </select>
							                                        </div>
							                                </div>
							                        </div>
							                    </div>
							                </div>
							                <div class="modal-footer">
		<button id="save" class="btn btn-primary btn-sm" type="button" onclick="updatedataval();"><i class="fas fa-plus-square"></i>Update</button>
			<button type="button" id="mclose" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
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

	public function updatedata()
	{
		$this->form_validation->set_rules('id', 'Edit ID', 'trim|required|min_length[1]|max_length[1000]|numeric');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|min_length[1]|max_length[30]|numeric');
		$this->form_validation->set_rules('specialist', 'specialist', 'trim|required|min_length[1]|max_length[30]');
    	$this->form_validation->set_rules('description', 'Description', 'trim');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$edit_id=trim(htmlentities($this->input->post('id')));
	    	$name=trim(htmlentities($this->input->post('name')));
	    	$charge_id=trim(htmlentities($this->input->post('charge_id')));
	    	$description=trim(htmlentities($this->input->post('description')));
	    	$status=trim(htmlentities($this->input->post('status')));
	    	$var_array=array($edit_id,$name,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Doctors_registration_model->editcheck($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    		$data=$this->fetch_data();
	    		$getresult=$this->Doctors_registration_model->updatedata($data,$edit_id);
	    		if($getresult)
	    		{
		    		echo json_encode(array('msg'=>'Updated Successfully','error' =>'','error_message' =>''));
	    		}
	    		else
	    		{
	    			echo json_encode(array('msg'=>'','error' =>'Failed to Update','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	    		echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
	    	}
	    }
	    else
	    {
	    echo json_encode(array('msg'=>'','error' =>'','error_message' =>$this->form_validation->error_array()));
	    }
	}

	public function deletedata()
	{
		$this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$delete_id=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($delete_id,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Doctors_registration_model->deletecheck($var_array);
	    	if($chk_duplication[0]['cnt']==1)
	    	{
	    		$getresult=$this->Doctors_registration_model->deletedata($delete_id);
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

}

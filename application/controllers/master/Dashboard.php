<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        
        $this->load->model('Dashboard_model');
        
      
    }
	public function index()
	{
      $data['title']='EMR::Dashboard';
      $data['activecls']='Dashboard';
      $cdate=date('Y-m-d');
      $office_id=$this->session->userdata('office_id');
      $data['today_patient'] = $this->db->query('SELECT count(*) as tcount FROM patient_appointment where appointment_date="'.$cdate.'"')->row()->tcount;
      $today_collection = $this->db->query('SELECT sum(grand_total) as net_amount FROM billing_master where  billing_date="'.$cdate.'"  and office_id="'.$office_id.'" ')->row()->net_amount;
      $advancepatientcashamount=$this->db->query("select sum(opdcharge.amount) as total from patient_appointment  left join opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
        where appointment_date = '$cdate' and opdcharge.office_id='$office_id'    ")->row()->total;
      $today_collections=$today_collection+$advancepatientcashamount;
      
      $data['today_collection']=number_format($today_collections, 2);
      $data['total_patient'] = $this->db->query('SELECT count(*) as tcount FROM patient_registration where office_id="'.$office_id.'" ')->row()->tcount;
      $data['total_doctors'] = $this->db->query('SELECT count(*) as tcount FROM doctors_registration where office_id="'.$office_id.'" ')->row()->tcount;
      $content=$this->load->view('master/dashboard',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}
}

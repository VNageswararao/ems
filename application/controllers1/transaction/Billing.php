<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
		      	redirect('login');
         }
    }
	public function index()
	{
      $data['title']='EMR::Billing';
      $data['activecls']='Billing';
      $content=$this->load->view('transaction/billing/insert',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);  
	}
	

}

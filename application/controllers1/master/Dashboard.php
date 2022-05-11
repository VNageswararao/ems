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
      $content=$this->load->view('master/dashboard',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}
}

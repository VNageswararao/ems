<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @29/06/2021
 */
class Common_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	
    public function getdepartment($var_array)
	{
		$sql = "select department_id,name from department where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getappointmenttype($var_array)
	{
		$sql = "select appointment_type_id,name from appointment_type where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
   
}
<?php
/**
 * Description of department_id_model
 *
 * @author Prabhu @10/02/2021
 */
class Counseling_viewmodel extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	
    public function getallappmodel($var_array)
	{
		$sql = "select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id=? and admission_date=? and preoperative_appointment.office_id=? and preoperative_appointment.cancel_flag=0";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
     public function getdatasurgerymdl($surid,$charid,$partid,$officeid)
    {
        if($charid==2)
        {
            $tabname='ipdcharge';
            $idname='ipdcharge_id';
        }
        elseif ($charid==3) {
            $tabname='laser';
            $idname='laser_id';
        }
        elseif ($charid==4) {
            $tabname='injection';
            $idname='injection_id';
        }
        $sql = "select $idname , name,amount from  $tabname where department_id=$surid and $idname=$partid and office_id=$officeid";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }

    public function canceldata($cancel_id)
    {
        $sql = "update preoperative_appointment set cancel_flag=1 where preoperative_appointment_id=$cancel_id";
        $result_row=$this->db->query($sql); 
        return $result_row;
    }
    public function deletedata($id) 
    {
        $this->db->where('preoperative_appointment_id', $id);
        if($this->db->delete('preoperative_appointment'))
        {
            return TRUE;
        }
    }
    
   
}
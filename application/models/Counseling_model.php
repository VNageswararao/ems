<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @26/01/2022
 */
class Counseling_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

    public function gettreamnetplanmodel($var_array)
    {
        $sql = "select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = ? and  date(examination_treatmentplan.created_date)=? and chargetype_id = ? and   examination_treatmentplan.office_id= ? group by examination_treatmentplan.examination_id";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }

    public function getpatientdetailsproceduremdl($var_array)
    {
        $sql = "select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id=? and examination_treatmentplan.office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }


    public function saveexaminationmodel($data,$id)
    {
        $this->db->set($data);
        $this->db->where('examination_treatmentplan_id', $id);
        if($this->db->update('examination_treatmentplan'))
        {
            return TRUE;
        }
    }
    public function deletedata($id) 
    {
        $this->db->where('examination_treatmentplan_id', $id);
        if($this->db->delete('examination_treatmentplan'))
        {
            return TRUE;
        }
    }
    public function saveproperativedata($data)
    {
        if($this->db->insert('preoperative_appointment',$data))
        {
             return TRUE;
        }
    }
    public function getdatasurgerymdl($surid,$charid,$officeid)
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
        $sql = "select $idname , name,amount from  $tabname where department_id=$surid and office_id=$officeid";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }

     

}
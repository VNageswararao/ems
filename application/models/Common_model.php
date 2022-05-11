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

	public function getrefractionv($var_array)
	{
		$sql = "select refraction_master_id,name,eye_type,ref_type from refraction_master where  office_id= ? and refraction_type=?  and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	 public function getrefractionmodel($var_array)
    {
        $sql = "select name,eye_type,ref_type,action from refraction_master where refraction_type=?   and office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
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

	public function getpatient_titles($var_array)
	{
		$sql = "select patient_title_id,name from patient_title where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getinstructioncommon($var_array)
	{
		$sql = "select medicine_instruction_id,name,days from  medicine_instruction where category_id=? and  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getallmedicine($var_array)
	{
		$sql = "select medicine_id,name from  medicine where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getallmedicinetemplates($var_array)
	{
		$sql = "select medicine_templates_id,name from  medicine_templates where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getallmedicineind($var_array)
	{
		$sql = "select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id=? and  medicine.office_id= ? and medicine.status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getalldialsismdl($var_array)
	{
		$sql = "select dialysis_id,name from dialysis where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getcity($var_array)
	{
		$sql = "select city_id,name from city where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getsource($var_array)
	{
		$sql = "select source_id,name from source where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getrefferalmaster($var_array)
	{
		$sql = "select referral_master_id,name from referral_master where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getopdinsurancecompany($var_array)
	{
		$sql = "select insurance_company_id,name from insurance_company where  office_id= ? and status=1 and charge_id in (1,2)";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getpateintcategory($var_array)
	{
		$sql = "select patient_category_id,name from  patient_category where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getdoctors($var_array)
	{
		$sql = "select doctors_registration_id,name from  doctors_registration where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getappointmenttypeopd($var_array)
	{
		$sql = "select appointment_type_id,name from appointment_type where  office_id= ? and status=1 and appointment_type_id in (select appointment_type_id from opdcharge)";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getpateintmrdnos($var_array)
	{
		$sql = "select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function issetcheckval($var_array)
    {
        $sql = "select count(*) as cnt from patient_registration where  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientdetailssearch($id,$office_id)
	{
		if($id==1){$chk='mrdno';}elseif ($id==2){$chk='mobileno';}elseif ($id==3){$chk='address';}elseif ($id==4){$chk='barcode';}
		$sql = "select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,$chk from  patient_registration where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function issetcheckpateintid($var_array)
    {
        $sql = "select count(*) as cnt from patient_registration where  patient_registration_id= ? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getmedcategory($var_array)
    {
        $sql = "select * from medicine_category where  office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientAppoinmentdetails($var_array)
    {
        $sql = "select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id=? and  doctors_registration.office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientMasterdetails($var_array)
    {
        $sql = "select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id=? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getmodeofpay($var_array)
	{
		$sql = "select modeofpay_id ,name from  modeofpay where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getinsurance_company($var_array)
	{
		$sql = "select insurance_company_id,name from insurance_company where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getchargeslist($var_array)
	{
		$sql = "select charge_id,name from charge_type where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	
	public function getcheckingchargeslist($idval,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
		}
		elseif($idval==2){
			$charges='ipdcharge';
		}
		elseif($idval==3){
			$charges='laser';
		}
		elseif($idval==4){
			$charges='injection';
		}
		elseif($idval==5){
			$charges='investigation';
		}
		$sql = "select count(*) as cnt from $charges where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}


	public function getopdpanelmodel($idval,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
		}
		elseif($idval==2){
			$charges='ipdcharge';
		}
		elseif($idval==3){
			$charges='laser';
		}
		elseif($idval==4){
			$charges='injection';
		}
		elseif($idval==5){
			$charges='investigation';
		}
		$sql = "select * from $charges where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getparticularsmodel($idval,$particular_id,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
			$id="opdcharge_id";
		}
		elseif($idval==2){
			$charges='ipdcharge';
			$id="ipdcharge_id";
		}
		elseif($idval==3){
			$charges='laser';
			$id="laser_id";
		}
		elseif($idval==4){
			$charges='injection';
			$id="injection_id";
		}
		elseif($idval==5){
			$charges='investigation';
			$id="investigation_id";
		}
		$sql = "select * from $charges where  $id=$particular_id  and office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getallusercounseler($val)
    {
        $sql = "select user_id,name from  user where user_type=$val";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }

    public function getdoctorval($var_array)
	{
		$sql = "select doctors_registration_id,name from doctors_registration where designation=? and   office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	 public function gethistorybillingtable($patient_id,$office_id)
	{
		$pat=' and billing_master.patient_registration_id='.$patient_id;
	 	$sql = "select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= $office_id   $pat ";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getpatapphistorydetails($patient_id,$office_id)
	{

		$pat=' and patient_registration.patient_registration_id='.$patient_id;
		$sql = "select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= $office_id   $pat ";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getallinvestigationmdl($var_array)
	{
		$sql = "select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)=? group by examination_chargesdetails.created_date";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getinvestdetails($var_array)
	{
		$sql = "select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = ?  and examination_chargesdetails.created_date=? and patient_registration.office_id=?";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}



   
}
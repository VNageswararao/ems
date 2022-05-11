<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @29/09/2021
 */
class Examination_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

     public function getcomplaintsdata($var_array)
    {
        $sql = "select name,complaints_id,if(status=1,'Active','Deactive') as status from complaints where  office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function geteyecompsaveddatamodel($examinationid)
    {
        $sql = "select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= $examinationid";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function getcheckdoctorname($patient_registration_id)
    {
        $sql = "select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= $patient_registration_id";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getoptho($var_array)
    {
        $sql = "select name,ophthalmic_history_id,if(status=1,'Active','Deactive') as status from ophthalmic_history where  office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
     public function getallcomp($var_array)
    {
        $sql = "select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

     public function getmedi($var_array)
    {
        $sql = "select name,medical_history_id,if(status=1,'Active','Deactive') as status from medical_history where  office_id= ? and status=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function getsavedatamodel($var_array)
    {
        $sql = "select * from examination where examination_id= ? and   office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
     public function getexaminationindividualdatafromdashboard($var_array)
    {
        $sql = "select examination.patient_appointment_id,examination.patient_registration_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,examination.confirm_flag,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination.examination_date= ?  and   examination.office_id= ? order by examination_id DESC";
        $result_row=$this->db->query($sql, $var_array); 
       // echo $this->db->last_query();exit;
        $res= $result_row->result_array ();
        return $res;
    }
     public function getexaminationindividualdata($var_array)
    {
        $sql = "select DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,examination.confirm_flag,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination.patient_registration_id= ?  and   examination.office_id= ? order by examination_id DESC";
        $result_row=$this->db->query($sql, $var_array); 
       // echo $this->db->last_query();exit;
        $res= $result_row->result_array ();
        return $res;
    }
    public function getexaminationindividualdatsa($var_array)
    {
        $sql = "select examination.patient_registration_id,examination.patient_appointment_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS opthdate,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination_date=?   and   examination.office_id= ? and confirm_flag=0";
        $result_row=$this->db->query($sql, $var_array); 
       // echo $this->db->last_query();exit;
        $res= $result_row->result_array ();
        return $res;
    }
     public function getexaminationindividualdatsaex($var_array)
    {
        //print_r($var_array);exit;
        $sql = "select examination.doc_action as confirm_flag,examination.patient_registration_id,examination.patient_appointment_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS opthdate,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination_date=? and optho_action=?  and   examination.office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
     public function getexaminationindividualdatsaexdoc($var_array)
    {
        //print_r($var_array);exit;
        $sql = "select examination.doc_action as confirm_flag,examination.patient_registration_id,examination.patient_appointment_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS opthdate,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination_date=? and doc_action=?  and   examination.office_id= ? and confirm_flag=1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getexaminationindividualdatsaexdocvis($var_array)
    {
        //print_r($var_array);exit;
        $sql = "select examination.doc_action as confirm_flag,examination.patient_registration_id,examination.patient_appointment_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS opthdate,examination.dialysis_con,examination.examination_id,doctors_registration.name as doctorname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,agemm,patient_registration.mobileno,examination.doctor_id  from examination inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id left join doctors_registration on doctors_registration.doctors_registration_id=examination.doctor_id where  examination_date=?  and   examination.office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function alreadysavecompmdl($var_array)
    {
        $sql = "select eye_left,eye_right,eye_be,remarks,complaints_id  from examination_complaints  where temp_id=? and complaints_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function getallrem($his_id)
    {
        $sql = "select gen_comp_remarks,gen_medi_remarks,gen_opth_remarks  from examination  where history_id='$his_id'";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function alreadysaveopthmdl($var_array)
    {
        $sql = "select eye_left,eye_right,eye_be,remarks,ophthalmic_history_id  from examination_ophthalmic_history  where temp_id=? and ophthalmic_history_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function alreadysavemedmdl($var_array)
    {
        $sql = "select remarks,medical_history_id  from examination_medical_history  where temp_id=? and medical_history_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function getallmedtemp($var_array)
    {
        $sql = "select medicine_id  from medicine  where medicine_templates_id=? and office_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function expgetcomplaintsdata($var_array)
    {
        $sql = "select complaints.name,remarks,if(eye_left=1,'Left Eye','') as lefteye,if(eye_right=1,'Right Eye','') as righteye  from examination_complaints inner join complaints on complaints.complaints_id=examination_complaints.complaints_id where temp_id=? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getopth($var_array)
    {
        $sql = "select ophthalmic_history.name,remarks,if(eye_left=1,'Left Eye','') as lefteye,if(eye_right=1,'Right Eye','') as righteye  from examination_ophthalmic_history inner join ophthalmic_history on ophthalmic_history.ophthalmic_history_id=examination_ophthalmic_history.ophthalmic_history_id where temp_id=? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
    public function getdoctormedicinemodel($var_array)
    {
        $sql = "select medicine.category_id,medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.temp_id=? and office_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getmedicineinstruction($val,$catid)
    {
        $sql = "select name from medicine_instruction where category_id=$catid";
        $result_row=$this->db->query($sql); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getdoctormedicinemodels($var_array)
    {
        $sql = "select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id=? and office_id=?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }

    public function getmedhis($var_array)
    {
        $sql = "select medical_history.name,remarks  from examination_medical_history inner join medical_history on medical_history.medical_history_id=examination_medical_history.medical_history_id where temp_id=? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
      //  echo $this->db->last_query();exit;
        $res= $result_row->result_array ();
        return $res;
    }
    public function deletedata($id) 
    {
        $this->db->where('examination_id', $id);
        if($this->db->delete('examination_complaints'))
        {
            $this->db->where('examination_id', $id);
            $this->db->delete('examination_eye');

            $this->db->where('examination_id', $id);
            $this->db->delete('examination_medical_history');

            $this->db->where('examination_id', $id);
            $this->db->delete('examination_ophthalmic_history');

            $this->db->where('examination_id', $id);
            $this->db->delete('examination');

            
            return TRUE;
        }
    }

    function qgetcomplaintsdata($requestData)
  {
    $office_id=$this->session->office_id;
    $columns = array(
      // datatable column index  => database column name
      0 =>'complaints_id ',
      1 =>'name',
      2 =>'name',
      3 =>'name'
     
    );
 
    $this->db->select('complaints_id');//s.photo_no,s.photo_name'
    $this->db->from('complaints');
    $whrcon = array('office_id' => $office_id);
    $result = $this->db->get();
    $totalData = $result->num_rows();
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
   
 
    $sql = "SELECT name,complaints_id,if(status=1,'Active','Deactive') as status";
    $sql.=" FROM complaints where office_id=$office_id ";
    // getting records as per search parameters
    $isFilterApply=0;
    if( !empty($requestData['search']['value']) ){   //name
      $sql.="  and (   name LIKE '".$requestData['search']['value']."%'  ";
       // $sql.="  OR lname LIKE '".$requestData['search']['value']."%'  ";
        $sql.="  OR description LIKE '".$requestData['search']['value']."%') ";
        $isFilterApply=1;
      }
 
 
      $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."  desc     LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length
      $result1 = $this->db->query($sql);
      
      if($isFilterApply==1){
        $totalFiltered =  $result1->num_rows(); 
      }

       // when there is a search parameter then we have to modify total number filtered rows as per search result.
      $row=$result1->result_array();

      for ($i=0; $i < count($row); $i++) {

        $left='L<input type="checkbox">&nbsp;&nbsp;R<input type="checkbox">';
          
        $row[$i]['slno']=$i+1;
        $row[$i]['rem']='<input type="text" class="form-control" id="remarks" name="remrks[]">';
        $row[$i]['lef']=$left;

        // $row[$i]['print']=$print;
        // $row[$i]['edit']=$edit;
        // $row[$i]['delete']=$delete;
        
      }


      $json_data = array(
        "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal"    => intval( $totalData ),  // total number of records
        "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data"            =>   $row  // total data array
 
      );
      return $json_data;
 
  }

        public function savetreatmentplanmdl($data)
        {
           $this->db->trans_begin();
           $examination_complaintss=$data['examination_treatmentplan'];
           $this->db->insert('examination_treatmentplan',$examination_complaintss);
          
           if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;
            }
            else
            {
                    $this->db->trans_commit();
                    return TRUE;
            }
        }

       public function savehistorymodel($data)
        {
            error_reporting(0);
           $this->db->trans_begin();
           $examination_complaintss=$data['examination_complaints'];
           $complaints_ids=$examination_complaintss['complaints_id'];
           $comp_lefts=$examination_complaintss['comp_left'];
           $comp_rights=$examination_complaintss['comp_right'];
           $comp_bes=$examination_complaintss['comp_be'];
           $temp_ids=$examination_complaintss['temp_id'];
           $remarkss=$examination_complaintss['remarks'];
           $i=0;
           foreach ($complaints_ids as $complaints_if) 
           {
              $combe=$coml=$comr=0;
              if(in_array($complaints_if,$comp_lefts)){
                $coml=1;
            }
              if(in_array($complaints_if,$comp_rights)){
                $comr=1;}

                if(in_array($complaints_if,$comp_bes)){
                $combe=1;}
        
             if(($coml>0)||($comr>0)||($combe>0)||($remarkss[$i]!=""))
             {
               $this->db->insert('examination_complaints',array("complaints_id"=>$complaints_ids[$i],"eye_left"=>$coml,"eye_right"=>$comr,"eye_be"=>$combe,"remarks"=>$remarkss[$i],"temp_id"=>$temp_ids));
             }
             
              $i++;
           }


           $examination_medical_historys=$data['examination_medical_history'];
           $medical_history_ids=$examination_medical_historys['medical_history_id'];
           $temp_ids=$examination_medical_historys['temp_id'];
           $remarkss=$examination_medical_historys['remarks'];
           $i=0;
           foreach ($medical_history_ids as $medical_history_i) 
           {
              
              if($remarkss[$i]){
               $this->db->insert('examination_medical_history',array("medical_history_id"=>$medical_history_i,"remarks"=>$remarkss[$i],"temp_id"=>$temp_ids));}
              $i++;
           }


           $examination_ophthalmic_historys=$data['examination_ophthalmic_history'];
           $complaints_idsg=$examination_ophthalmic_historys['ophthalmic_history_id'];
           $comp_lefts=$examination_ophthalmic_historys['opth_left'];
           $comp_rights=$examination_ophthalmic_historys['opth_right'];
           $comp_bes=$examination_ophthalmic_historys['opth_be'];
           $temp_ids=$examination_ophthalmic_historys['temp_id'];
           $remarkss=$examination_ophthalmic_historys['remarks'];
           $it=0;
           foreach ($complaints_idsg as $complaints_iff) 
           {
              $combe=$coml=$comr=0;
              if(in_array($complaints_iff,$comp_lefts)){
                $coml=1;
            }
              if(in_array($complaints_iff,$comp_rights)){
                $comr=1;}

                 if(in_array($complaints_iff,$comp_bes)){
                $combe=1;}
        
             if(($coml>0)||($comr>0)||($combe>0)||($remarkss[$it]!=""))
             {
               $this->db->insert('examination_ophthalmic_history',array("ophthalmic_history_id"=>$complaints_idsg[$it],"eye_left"=>$coml,"eye_right"=>$comr,"eye_be"=>$combe,"remarks"=>$remarkss[$it],"temp_id"=>$temp_ids));
              }
             
              $it++;

           }
          
          
           if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;
            }
            else
            {
                    $this->db->trans_commit();
                    return TRUE;
            }
        }

          public function savemedhistorymodel($data)
        {
            error_reporting(0);
           $this->db->trans_begin();
           $doctor_examinations=$data['doctor_examination'];
           $medicine_ids=$doctor_examinations['medicine_id'];
           $instructions=$doctor_examinations['instruction'];
           $nodayss=$doctor_examinations['nodays'];
           $qtys=$doctor_examinations['qty'];
           $sdates=$doctor_examinations['sdate'];
           $tdates=$doctor_examinations['tdate'];
           $medeyes=$doctor_examinations['med_eye'];
           $temp_ids=$doctor_examinations['temp_id'];
           $i=0;
           foreach ($medicine_ids as $medicine_idd) 
           {
                   $this->db->insert('medicine_prescription',array(
                                                      "medicine_id"=>$medicine_idd,
                                                      "instruction"=>$instructions[$i],
                                                      "nodays"=>$nodayss[$i],
                                                      "qty"=>$qtys[$i],
                                                      "sdate"=>$sdates[$i],
                                                      "tdate"=>$tdates[$i],
                                                      "med_eye"=>$medeyes[$i],
                                                      "temp_id"=>$temp_ids
                                             )
                                    );
                   $i++;
           }




          
          
           if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;
            }
            else
            {
                    $this->db->trans_commit();
                    return TRUE;
            }
        }
        public function saveexaminationmodel($data)
        {
           $this->db->trans_begin();
           $examinationmaster=$data['addexamination'];
           $this->db->insert('examination',$examinationmaster);
           $historyids=$examinationmaster['history_id'];
           $treatmentplan_ref_ids=$examinationmaster['treatmentplan_ref_id'];
           $addmedhistory_ids=$examinationmaster['addmedhistory_id'];
           $examination_id=$this->db->insert_id();
           $datahis = array( 
                'examination_id'      => $examination_id, 
            );
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_complaints',$datahis);
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_ophthalmic_history',$datahis);
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_medical_history',$datahis);
           $this->db->where('temp_id', $addmedhistory_ids);
           $this->db->update('medicine_prescription',$datahis);
           $this->db->where('temp_id', $treatmentplan_ref_ids);
           $this->db->update('examination_treatmentplan',$datahis);


           $examination_eyes=$data['examination_eye'];
           $eye_complaints_id=$examination_eyes['eye_complaints_id'];
           $lefteye=$examination_eyes['lefteye'];
           $righteye=$examination_eyes['righteye'];
           $i=0;
           foreach ($eye_complaints_id as $complaints_if) 
           {
              
              if($lefteye[$i]!='' || $righteye[$i]!=''){
              $this->db->insert('examination_eye',array("examination_id"=>$examination_id,"eye_complaints_id"=>$eye_complaints_id[$i],"lefteye"=>$lefteye[$i],"righteye"=>$righteye[$i],"temp_id"=>$historyids));}
              $i++;
           }
            if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;
            }
            else
            {
                    $this->db->trans_commit();
                    //$this->session->set_flashdata('sales_id',$sales_id);
                    return TRUE;
            }
        }

          public function updateexaminationmodel($data,$id)
        {
            $this->db->trans_begin();
            $this->db->where('examination_id', $id);
            $this->db->delete('examination_chargesdetails');
            $this->db->where('examination_id', $id);
            $this->db->delete('examination_eye');
            $examinationmaster=$data['addexamination'];
            $this->db->set($examinationmaster);
            $this->db->where('examination_id', $id);
            $this->db->update('examination');
            $examination_id=$id;
            $historyids=$examinationmaster['history_id'];
            $treatmentplan_ref_ids=$examinationmaster['treatmentplan_ref_id'];
            $patient_registration_id=$examinationmaster['patient_registration_id'];
            $patient_appointment_id=$examinationmaster['patient_appointment_id'];
            $doctor_id=$examinationmaster['doctor_id'];
            $addmedhistory_ids=$examinationmaster['addmedhistory_id'];
            $datahis = array( 
                'examination_id'      => $examination_id, 
            );
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_complaints',$datahis);
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_ophthalmic_history',$datahis);
           $this->db->where('temp_id', $historyids);
           $this->db->update('examination_medical_history',$datahis);
           $this->db->where('temp_id', $addmedhistory_ids);
           $this->db->update('medicine_prescription',$datahis);
           $this->db->where('temp_id', $treatmentplan_ref_ids);
           $this->db->update('examination_treatmentplan',$datahis);

           $examination_eyes=$data['examination_eye'];
           $eye_complaints_id=$examination_eyes['eye_complaints_id'];
           $lefteye=$examination_eyes['lefteye'];
           $righteye=$examination_eyes['righteye'];
           $i=0;
           foreach ($eye_complaints_id as $complaints_if) 
           {
              
              if($lefteye[$i]!='' || $righteye[$i]!=''){
              $this->db->insert('examination_eye',array("examination_id"=>$examination_id,"eye_complaints_id"=>$eye_complaints_id[$i],"lefteye"=>$lefteye[$i],"righteye"=>$righteye[$i],"temp_id"=>$historyids));}
              $i++;
           }

           
           $billing_details=$data['examination_investigation'];
           $charge_ids=$billing_details['charge_id'];
           $particulars_ids=$billing_details['particulars_id'];
           $rates=$billing_details['rate'];
           $calrow_ids=$billing_details['calrow_id'];
           if($calrow_ids){
           $ij=0;
           foreach ($calrow_ids as $calrow_id) 
           {
                    $this->db->insert('examination_chargesdetails',array(
                                                          "examination_id"=>$examination_id,
                                                          "charge_id"=>$charge_ids[$ij],
                                                          "particulars_id"=>$particulars_ids[$ij],
                                                          "patient_registration_id"=>$patient_registration_id,
                                                          "patient_appointment_id"=>$patient_appointment_id,
                                                          "doctor_id"=>$doctor_id,
                                                          "rate"=>$rates[$ij]
                                                        
                                                          )
                                    );
               
                
               $ij++;
           }
        }
       

            if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;
            }
            else
            {
                    $this->db->trans_commit();
                    //$this->session->set_flashdata('sales_id',$sales_id);
                    return TRUE;
            }
        }
         public function Getdetailstable($var_array)
    {
        $sql = "select * from examination_chargesdetails where  examination_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }

     public  function printcertificate($examinationid,$office_id)
  {
        error_reporting(0);    
    $office=$this->db->get_where('office',"office_id=$office_id")->row();
    $data['logo']=($office->logo=='')?'':"<img style='width:100%;max-height:100px' src='". base_url('images/profile/')."$office->logo'>";
    
    $data['company_name']=$office->printable_company_name;
    $data['company_address']=$office->printable_company_address;
    $data['company_mobile']=$office->printable_company_mobile;
    $data['company_land_phone']=$office->printable_company_phone;
    $data['company_email']=$office->printable_emailid;
    $data['company_gst']=$office->license_no;
    $data['print_declaration']=$office->declaration;
    $data['gstin_no']=$office->gstin_no;

    $examination_masters=$this->db->get_where('examination',"examination_id=$examinationid")->row();
    $data['doctorname']=$this->db->get_where('doctors_registration',"doctors_registration_id=$examination_masters->doctor_id")->row()->name;
    $data['username']=$this->db->get_where('user',"user_id=$examination_masters->login_id")->row()->name;

    $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$examination_masters->patient_registration_id")->row();
    $data['fname']=$patient_details->fname; 
   $data['lname']=$patient_details->lname; 
   $data['mrdno']=$patient_details->mrdno; 
   $data['address']=$patient_details->address; 
   $data['mobileno']=$patient_details->mobileno; 
  
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $title_id=$patient_details->title; 

   $data['vis1']=$examination_masters->vis1;
   $data['vis6']=$examination_masters->vis6;
   $data['vis4']=$examination_masters->vis4;
   $data['vis9']=$examination_masters->vis9;

   $data['vis2']=$examination_masters->vis2;
   $data['vis7']=$examination_masters->vis7;
   $data['vis5']=$examination_masters->vis5;
   $data['vis10']=$examination_masters->vis10;
   $data['pre5']=$examination_masters->pre5;
   $data['pre11']=$examination_masters->pre11;

     $data['Fundusr']='';
     $data['Fundusl']='';
     $data['Fieldr']='';
     $data['Fieldl']='';

   
   $eye_comp=$this->db->query("select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=$examination_masters->examination_id and  name='Fundus'")->result(); 
                   if($eye_comp){
                                 foreach ($eye_comp as $datab) 
                                 {
                                     $data['Fundusr']=$datab->righteye;
                                     $data['Fundusl']=$datab->lefteye;
                                  } 
                                        
                      }

                      $eye_comp=$this->db->query("select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=$examination_masters->examination_id and   name='Fields' ")->result(); 
                   if($eye_comp)
                   {
                             foreach ($eye_comp as $datab) {
                                 $data['Fieldr']=$datab->righteye;
                                 $data['Fieldl']=$datab->lefteye;
                                  }    
                    }
   
   
         $printdata=1;
         switch($printdata)
            {
            case 1:$html=$this->load->view("master/visionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            case 2:$html=$this->load->view("master/visionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A4-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
           case 3:$html=$this->load->view("master/visionprint",$data, true); 
        
           
                   $print_config=[
                                    'format' => 'A5',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
              case 4:$html=$this->load->view("master/visionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A5-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            }

            $mpdf = new \Mpdf\Mpdf($print_config);
            $pdfFilePath ="print-".time().".pdf"; 
            $labName='';
            $mpdf->SetWatermarkText($labName,0.03);
            $mpdf->showWatermarkText = true;
            $mpdf -> SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
           


  }

     public  function print_bill($examinationid,$chkcomplaintsout,$chkopthalmicsout,$chkmedicalout,$chkeyepartout,$addmedicinessout,$investigationchkout,$preliminary_exout,$vsisonreadingsout,$curspecout,$objectchkout,$arkkchkout,$manchkout,$specchkout,$conlchkout,$pmtchkout,$office_id)
  { 
      error_reporting(0);                  
    $office=$this->db->get_where('office',"office_id=$office_id")->row();
    $data['logo']=($office->logo=='')?'':"<img style='width:100%;max-height:100px' src='". base_url('images/profile/')."$office->logo'>";
    
    $data['company_name']=$office->printable_company_name;
    $data['company_address']=$office->printable_company_address;
    $data['company_mobile']=$office->printable_company_mobile;
    $data['company_land_phone']=$office->printable_company_phone;
    $data['company_email']=$office->printable_emailid;
    $data['company_gst']=$office->license_no;
    $data['print_declaration']=$office->declaration;
    $data['gstin_no']=$office->gstin_no;

    $examination_masters=$this->db->get_where('examination',"examination_id=$examinationid")->row();
    $data['doctorname']=$this->db->get_where('doctors_registration',"doctors_registration_id=$examination_masters->doctor_id")->row()->name;
    $data['username']=$this->db->get_where('user',"user_id=$examination_masters->login_id")->row()->name;

    $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$examination_masters->patient_registration_id")->row();
   
    $data['current_meditation']=$examination_masters->current_meditation;
    $data['family_history']=$examination_masters->family_history;
    $data['drug_history']=$examination_masters->drug_history;
    $data['cur1']=$examination_masters->cur1;
    $data['cur2']=$examination_masters->cur2;
    $data['cur3']=$examination_masters->cur3;
    $data['cur4']=$examination_masters->cur4;
    $data['cur5']=$examination_masters->cur5;
    $data['cur6']=$examination_masters->cur6;
    $data['cur7']=$examination_masters->cur7;
    $data['cur8']=$examination_masters->cur8;
    $data['cur9']=$examination_masters->cur9;
    $data['cur10']=$examination_masters->cur10;
    $data['cur11']=$examination_masters->cur11;
    $data['cur12']=$examination_masters->cur12;
    $data['cur13']=$examination_masters->cur13;
    $data['cur14']=$examination_masters->cur14;
    $data['cur15']=$examination_masters->cur15;
    $data['cur16']=$examination_masters->cur16;
    $data['vis1']=$examination_masters->vis1;
    $data['vis2']=$examination_masters->vis2;
    $data['vis3']=$examination_masters->vis3;
    $data['vis4']=$examination_masters->vis4;
    $data['vis5']=$examination_masters->vis5;
    $data['vis6']=$examination_masters->vis6;
    $data['vis7']=$examination_masters->vis7;
    $data['vis8']=$examination_masters->vis8;
    $data['vis9']=$examination_masters->vis9;
    $data['vis10']=$examination_masters->vis10;
    $data['ar1']=$examination_masters->ar1;
    $data['ar2']=$examination_masters->ar2;
    $data['ar3']=$examination_masters->ar3;
    $data['ar4']=$examination_masters->ar4;
    $data['ar5']=$examination_masters->ar5;
    $data['ar6']=$examination_masters->ar6;
    $data['ar7']=$examination_masters->ar7;
    $data['ar8']=$examination_masters->ar8;
    $data['ar9']=$examination_masters->ar9;
    $data['ar10']=$examination_masters->ar10;
    $data['man1']=$examination_masters->man1;
    $data['man2']=$examination_masters->man2;
    $data['man3']=$examination_masters->man3;
    $data['man4']=$examination_masters->man4;
    $data['man5']=$examination_masters->man5;
    $data['man6']=$examination_masters->man6;
    $data['man7']=$examination_masters->man7;
    $data['man8']=$examination_masters->man8;
    $data['man9']=$examination_masters->man9;
    $data['man10']=$examination_masters->man10;
    $data['spe1']=$examination_masters->spe1;
    $data['spe2']=$examination_masters->spe2;
    $data['spe3']=$examination_masters->spe3;
    $data['spe4']=$examination_masters->spe4;
    $data['spe5']=$examination_masters->spe5;
    $data['spe6']=$examination_masters->spe6;
    $data['spe7']=$examination_masters->spe7;
    $data['spe8']=$examination_masters->spe8;
    $data['spe9']=$examination_masters->spe9;
    $data['spe10']=$examination_masters->spe10;
    $data['spe11']=$examination_masters->spe11;
    $data['spe12']=$examination_masters->spe12;
    $data['spe13']=$examination_masters->spe13;
    $data['spe14']=$examination_masters->spe14;
    $data['spe15']=$examination_masters->spe15;
    $data['spe16']=$examination_masters->spe16;
    $data['con1']=$examination_masters->con1;
    $data['con2']=$examination_masters->con2;
    $data['con3']=$examination_masters->con3;
    $data['con4']=$examination_masters->con4;
    $data['con5']=$examination_masters->con5;
    $data['con6']=$examination_masters->con6;
    $data['con7']=$examination_masters->con7;
    $data['con8']=$examination_masters->con8;
    $data['con9']=$examination_masters->con9;
    $data['con10']=$examination_masters->con10;
    $data['con11']=$examination_masters->con11;
    $data['con12']=$examination_masters->con12;
    $data['con13']=$examination_masters->con13;
    $data['con14']=$examination_masters->con14;
    $data['con15']=$examination_masters->con15;
    $data['con16']=$examination_masters->con16;
    $data['pmt1']=$examination_masters->pmt1;
    $data['pmt2']=$examination_masters->pmt2;
    $data['pmt3']=$examination_masters->pmt3;
    $data['pmt4']=$examination_masters->pmt4;
    $data['pmt5']=$examination_masters->pmt5;
    $data['pmt6']=$examination_masters->pmt6;
    $data['pmt7']=$examination_masters->pmt7;
    $data['pmt8']=$examination_masters->pmt8;
    $data['pmt9']=$examination_masters->pmt9;
    $data['pmt10']=$examination_masters->pmt10;
    $data['pmt11']=$examination_masters->pmt11;
    $data['pmt12']=$examination_masters->pmt12;
    $data['pmt13']=$examination_masters->pmt13;
    $data['pmt14']=$examination_masters->pmt14;
    $data['pmt15']=$examination_masters->pmt15;
    $data['pmt16']=$examination_masters->pmt16;

   $data['fname']=$patient_details->fname; 
   $data['lname']=$patient_details->lname; 
   $data['mrdno']=$patient_details->mrdno; 
   $data['address']=$patient_details->address; 
   $data['mobileno']=$patient_details->mobileno; 
  
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $title_id=$patient_details->title; 
   $data['titlename']=$this->db->get_where('patient_title',"patient_title_id=$title_id")->row()->name;
   $showdata='<table  width="100%" style="line-height:10px;margin-top:0px;font-size: 14;"> 
              <tr>
                   <td style="text-align: left;" class="tabledivideleft">Date:</td>
                   <td style="text-align: left;" class="tabledivideright">'.$this->date->dateSql2View($examination_masters->examination_date).'</td> 
              </tr>';

              if($chkcomplaintsout=='true')
              {
                  
                  $complaints=$this->db->query("select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=$examination_masters->examination_id")->result(); 
                   if($complaints){
                  $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Presenting Complaint:</td>
                               <td style="text-align: left;" class="tabledivideright">';
                                    if($complaints){ foreach($complaints as $comp){
                                        $lefteye='';
                                        $righteye='';
                                         if($comp->eye_left==1)
                                        {
                                           $lefteye='<b>Left Eye</b>'.$comp->remarks;
                                        }
                                        if($comp->eye_right==1)
                                        {
                                           $righteye='<b>Right Eye</b>'.$comp->remarks;
                                        }
                                     $showdata.='<span>'.$comp->name.'   '.$lefteye.'  '.$righteye.'<br/>

                                    </span>';  
                                } }
                               $showdata.='</td> 
                          </tr>';
                      }

              }

              if($chkopthalmicsout=='true')
              {
                 $ophthalmic_history=$this->db->query("select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=$examination_masters->examination_id")->result(); 
if($ophthalmic_history){ 
                  $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Ophthalmic History:</td>
                               <td style="text-align: left;" class="tabledivideright">';
                                    if($ophthalmic_history){ foreach($ophthalmic_history as $opth){
                                        $lefteye='';
                                        $righteye='';
                                         if($opth->eye_left==1)
                                        {
                                           $lefteye='<b>Left Eye</b>'.$opth->remarks;
                                        }
                                        if($opth->eye_right==1)
                                        {
                                           $righteye='<b>Right Eye</b>'.$opth->remarks;
                                        }
                                     $showdata.='<span>'.$opth->name.'   '.$lefteye.'  '.$righteye.'<br/>

                                    </span>';  
                                } }
                               $showdata.='</td> 
                          </tr>';
                      }

              }

                if($chkmedicalout=='true')
              {
                  $medical_history=$this->db->query("select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=$examination_masters->examination_id")->result(); 
                  if($medical_history){
                  $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Medical History:</td>
                               <td style="text-align: left;" class="tabledivideright">';
                                    if($medical_history){ foreach($medical_history as $medi){
                                     $showdata.='<span>'.$medi->name.'<br/>
                                    </span>';  
                                } }
                               $showdata.='</td> 
                          </tr>';
                      }
              }

              if($chkeyepartout=='true')
              {
                   $eye_comp=$this->db->query("select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=$examination_masters->examination_id")->result(); 
                   if($eye_comp){
                  $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Eye Details:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                     
                                         <table width="100%" style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:0.6px solid black;" border="1">
                                          <thead>
                                             <tr>
                                               <th>Right Eye</th>
                                               <th>Particulars</th>
                                               <th>Left Eye</th>
                                            </tr>
                                            </thead>
                                            <tbody id="showdataeyecomp">';
                                             foreach ($eye_comp as $datab) { 
                                        $showdata.='<tr>
                                                    <td>'.$datab->righteye.'</td>
                                                    <td>'.$datab->name.'</td>
                                                    <td>'.$datab->lefteye.'</td>
                                                </tr>';
                                              } 
                                          $showdata.='</tbody></table>
                                            </td> 
                                     
                                </tr>';
                      }
              }

              if($addmedicinessout=='true')
              {
                    $var_array=array($examination_masters->examination_id,$this->session->userdata('office_id'));
                    $getdoctorprescription=$this->getdoctormedicinemodels($var_array);
                   
                   if($getdoctorprescription)
                   {
                   
                    $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Medicine Details:</td>
                               <td style="text-align: left;" class="tabledivideright">
<br/>
                               <table  style="width:100%;margin-top:25px;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:0.6px solid black;" border="1"><thead><tr><th style="width:5%;">SL NO</th style="width:10%;"><th style="width:20%;">Drug Name</th><th style="width:20%;">Instruction</th><th style="width:20%;">No Of Days</th><th style="width:20%;">Qty</th><th style="width:5%;">Eye</th></tr></thead><tbody>';
                     $sgl=0;
                     foreach($getdoctorprescription as $datame)
                     {
                        $sgl++;
                        $showdata.='<tr><td>'.$sgl.'</td><td>'.$datame['drugname'].'</td><td>'.$datame['instruction'].'</td><td>'.$datame['nodays'].'</td><td>'.$datame['qty'].'</td><td>'.$datame['med_eye'].'</td></tr>';
                     }
                      $showdata.='</tbody></table></td></tr>';
                   }
              }

               if($investigationchkout=='true')
              {
                    $var_array=array($examination_masters->examination_id);
                    $Getdetailstableex=$this->Getdetailstable($var_array);
                   
                   if($Getdetailstableex)
                   {
                   
                    $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Investigation Details:</td>
                               <td style="text-align: left;" class="tabledivideright">

                               <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1"><thead><tr><th>Particulars</th><th>Rate</th></tr></thead><tbody>';
                     $sl=1;
                      $this->load->model('Common_model');
                     foreach($Getdetailstableex as $datai)
                     {
                        $getparticularname=$this->Common_model->getparticularsmodel($datai['charge_id'],$datai['particulars_id'],$this->session->userdata('office_id'));

                         $showdata.='<tr>
                              <td>'.$getparticularname[0]['name'].'</td>
                              <td>'.$datai['rate'].'</td>
                         </tr>';
                         $sl++;

                     }
                      $showdata.='</tbody></table></td></tr>';
                   }
              }

              if($preliminary_exout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Preliminary  Examination:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                  <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                <tbody><tr>
                                                    <th>Date</th>
                                                    <th class="tab_tit">NCT</th>
                                                    <th class="tab_tit">GAT</th>
                                                    <th class="tab_tit">CCT</th>
                                                    <th class="tab_tit">Angle</th>
                                                    <th class="tab_tit">Color Vision</th>
                                                    <th class="tab_tit">Pupil</th>
                                                </tr>
                                                 <tr>
                                                    <td class="tab_tit">Right Eye</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre1.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre2.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre3.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre4.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre5.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre6.'</td>
                                                </tr>
                                                 <tr>
                                                    <td class="tab_tit">Left Eye</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre7.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre8.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre9.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre10.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre11.'</td>
                                                    <td style="padding:5px;" align="center">'.$examination_masters->pre12.'</td>
                                                </tr>
                                            </tbody></table>
                                            </td>
                                            </tr>';
              }

               if($vsisonreadingsout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Vision Readings:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                  <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                          <tbody><tr>
                                                            <th></th>
                                                            <th colspan="2" align="center">UCVA</th>
                                                            <th>PH</th>
                                                            <th colspan="2" align="center">BCVA</th>
                                                          </tr>
                                                          <tr>
                                                            <td></td>
                                                            <td>UCDVA</td>
                                                            <td>UCNVA</td>
                                                            <td>PH</td>
                                                            <td>UCDVA</td>
                                                            <td>UCNVA</td>
                                                          </tr>
                                                           <tr>
                                                              <td>Right Eye</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis1.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis2.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis3.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis4.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis5.'</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Left Eye</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis6.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis7.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis8.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis9.'</td>
                                                              <td style="padding:5px;" align="center">'.$examination_masters->vis10.'</td>
                                                          </tr>
                                                      </tbody></table>
                                            </td>
                                            </tr>';
              }


                  if($curspecout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Current Spectacle Prescription:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                  <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                        <tbody><tr>
                                            <th align="center" class="tab_tit">RE</th>
                                            <th align="center" class="tab_tit">LE</th>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px;">
                                               <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                    <tbody><tr>
                                                        <td>
                                                        </td><td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">D.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur1.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur2.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur3.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur4.'</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">N.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur5.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur6.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur7.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur8.'</td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                            <td style="padding: 0px;">
                                               <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                    <tbody><tr>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur9.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur10.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur11.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur12.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur13.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur14.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur15.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->cur16.'</td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                            </td>
                                            </tr>';
              }
             
                  if($objectchkout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top"> Objective Refraction:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                         <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                          <tbody><tr>
                                                            <th>UD</th>
                                                            <th>SPH</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                            <th>CP</th>
                                                            <th>SPH</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                          </tr>
                                                          <tr>
                                                             <td>RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj1.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj2.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj3.'</td>
                                                             <td >RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj4.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj5.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj6.'</td>
                                                          </tr>
                                                           <tr>
                                                             <td>LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj7.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj8.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj9.'</td>
                                                             <td >LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj10.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj11.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->obj12.'</td>
                                                          </tr>
                                                          <tr>
                                                            <td>IPD</td>
                                                            <td style="padding:5px;" align="center">'.$examination_masters->obj13.'</td>
                                                            <td>PD RE</td>
                                                            <td style="padding:5px;" align="center">'.$examination_masters->obj14.'</td>
                                                            <td>PD LE</td>
                                                            <td style="padding:5px;" align="center">'.$examination_masters->obj15.'</td>
                                                          </tr>
                                                      </tbody></table>
                                </td>
                                </tr>';
              }

                 if($arkkchkout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">AR Kerotometry:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                         <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                          <tbody><tr>
                                                            <th>ARK</th>
                                                            <th>K1</th>
                                                            <th>AXIS</th>
                                                            <th>K2</th>
                                                            <th>AXIS</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                          </tr>
                                                          <tr>
                                                             <td>RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar1.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar2.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar3.'</td>
                                                             <td>RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar4.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar5.'</td>
                                                            
                                                          </tr>
                                                           <tr>
                                                             <td>LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar6.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar7.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar8.'</td>
                                                             <td>LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar9.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->ar10.'</td>
                                                          </tr>
                                                      </tbody></table>
                                </td>
                                </tr>';
              }


               if($manchkout=='true')
              {
                         $showdata.='<br/><tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Manual Kerotometry:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                         <table  style="width:100%;font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;border-collapse: collapse;border:0.6px solid black;" border="1">
                                                          <tbody><tr>
                                                            <th>ARK</th>
                                                            <th>K1</th>
                                                            <th>AXIS</th>
                                                            <th>K2</th>
                                                            <th>AXIS</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                          </tr>
                                                          <tr>
                                                             <td>RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man1.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man2.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man3.'</td>
                                                             <td>RE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man4.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man5.'</td>
                                                            
                                                          </tr>
                                                           <tr>
                                                             <td>LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man6.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man7.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man8.'</td>
                                                             <td>LE</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man9.'</td>
                                                             <td style="padding:5px;" align="center">'.$examination_masters->man10.'</td>
                                                          </tr>
                                                      </tbody></table>
                                </td>
                                </tr>';
              }


                  if($specchkout=='true')
              {
                         $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Spectacle Correction:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                      <table width="100%" style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:0.6px solid black;height:100px;" border="1">
                                                    <tr>
                                                        <th colspan="1"></th>
                                                        <th colspan="4">RE</th>
                                                        <th colspan="4">LE</th>
                                                    </tr>
                                                    <tr>
                                                        <td></th>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">D.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe1.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe2.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe3.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe4.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe9.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe10.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe11.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe12.'</td>
                                                    </tr>
                                                     <tr>
                                                        <td  class="tab_tit">N.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe5.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe6.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe7.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe8.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe13.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe14.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe15.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->spe16.'</td>
                                                    </tr>
                                                </table>
                                </td>
                                </tr>';
              }

               if($conlchkout=='true')
              {
                         $showdata.='<tr>
                               <td style="text-align: left;"  class="tabledivideleft" valign="top">Contact Lens Correction:</td>
                               <td style="text-align: left;" class="tabledivideright">
                                      <table width="100%" style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:0.6px solid black;height:100px;" border="1">
                                                    <tr>
                                                        <th colspan="1"></th>
                                                        <th colspan="4">RE</th>
                                                        <th colspan="4">LE</th>
                                                    </tr>
                                                    <tr>
                                                        <td></th>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">D.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con1.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con2.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con3.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con4.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con9.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con10.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con11.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con12.'</td>
                                                    </tr>
                                                     <tr>
                                                        <td  class="tab_tit">N.V</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con5.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con6.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con7.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con8.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con13.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con14.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con15.'</td>
                                                        <td style="padding:5px;" align="center">'.$examination_masters->con16.'</td>
                                                    </tr>
                                                </table>
                                </td>
                                </tr>';
              }



    $showdata.='</table>';

   $data['conddata']=$showdata;
 

   

  

    
     


   
   
         $printdata=1;
         switch($printdata)
            {
            case 1:$html=$this->load->view("transaction/examination/examinationprint",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            case 2:$html=$this->load->view("transaction/billing/print",$data, true); 
                   $print_config=[
                                    'format' => 'A4-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
           case 3:$html=$this->load->view("transaction/billing/print",$data, true); 
        
           
                   $print_config=[
                                    'format' => 'A5',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
              case 4:$html=$this->load->view("transaction/billing/print",$data, true); 
                   $print_config=[
                                    'format' => 'A5-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            }

            $mpdf = new \Mpdf\Mpdf($print_config);
            $pdfFilePath ="print-".time().".pdf"; 
            $labName='';
            $mpdf->SetWatermarkText($labName,0.03);
            $mpdf->showWatermarkText = true;
            $mpdf -> SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
           
  }

  function print_billgen($key,$pid,$paid,$office_id)
  {
       
    $office=$this->db->get_where('office',"office_id=$office_id")->row();
    $data['logo']=($office->logo=='')?'':"<img style='width:100%;max-height:100px' src='". base_url('images/profile/')."$office->logo'>";
    
    $data['company_name']=$office->printable_company_name;
    $data['company_address']=$office->printable_company_address;
    $data['company_mobile']=$office->printable_company_mobile;
    $data['company_land_phone']=$office->printable_company_phone;
    $data['company_email']=$office->printable_emailid;
    $data['company_gst']=$office->license_no;
    $data['print_declaration']=$office->declaration;
    $data['gstin_no']=$office->gstin_no;

   $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$pid")->row();
   $data['fname']=$patient_details->fname; 
   $data['lname']=$patient_details->lname; 
   $data['mrdno']=$patient_details->mrdno; 
   $data['address']=$patient_details->address; 
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $data['mobileno']=$patient_details->agemm; 
    $data['mobileno']=$patient_details->mobileno; 
  
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $title_id=$patient_details->title; 
   $data['titlename']=$this->db->get_where('patient_title',"patient_title_id=$title_id")->row()->name;
   
   

                      

    $patient_appointment=$this->db->get_where('patient_appointment',"patient_appointment_id=$paid")->row();
    if($patient_appointment->updated_date)
    {
        $data['created_date']=$patient_appointment->updated_date; 
    }
    else
    {
        $data['created_date']=$patient_appointment->created_date; 
    }
   
   
   $data['token_no']=$patient_appointment->token_no; 
   $data['doctorname']=$this->db->get_where('doctors_registration',"doctors_registration_id=$patient_appointment->doctor_id")->row()->name;
   $data['username']=$this->db->get_where('user',"user_id=$patient_appointment->login_id")->row()->name;
   $data['token_no']=$patient_appointment->token_no; 
   $data['appointment_date']=$this->date->dateSql2View($patient_appointment->appointment_date);
   $data['medicinedetails']= $this->db->query("select medicine.name as drugname,instruction,nodays,qty,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.temp_id='$key'")->result();
   
   
           switch($patient_details->print)
            {
            case 1:$html=$this->load->view("transaction/examination/medicine_prescriptionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            case 2:$html=$this->load->view("transaction/examination/medicine_prescriptionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A4-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
           case 3:$html=$this->load->view("transaction/examination/medicine_prescriptionprint",$data, true); 
        
           
                   $print_config=[
                                    'format' => 'A5',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
              case 4:$html=$this->load->view("transaction/examination/medicine_prescriptionprint",$data, true); 
                   $print_config=[
                                    'format' => 'A5-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            }

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
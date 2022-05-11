<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
		      	redirect('login');
         }
         $this->load->model('Common_model');
         $this->load->model('Examination_model');
    }

    public function index()
   {
      $data['title']='EMR::Examination';
      $data['activecls']='Examination';
      $patient_registration_id=$this->input->post('printpatient_registration_id');
      $pat_app_id=$this->input->post('pat_app_id');
      $var_array=array($this->session->userdata('office_id'));
      $data['medtemplates']=$this->Common_model->getallmedicinetemplates($var_array);
      $data['treatmentplankey']= $this->generateRandomString();
      $data['geteyecomp']=$this->Examination_model->getallcomp($var_array);
      $data['getalldialysis']=$this->Common_model->getalldialsismdl($var_array);
      $data['getallmedicine']=$this->Common_model->getallmedicine($var_array);
      $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$patient_registration_id")->row();
      $patient_apdetails=$this->db->get_where('patient_appointment',"patient_appointment_id=$pat_app_id")->row();

      $data['pname']=$patient_details->fname . $patient_details->lname; 
      $data['mrdno']=$patient_details->mrdno; 
      $data['dob']=date("d-m-Y", strtotime($patient_details->dob));
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
      $data['patient_registration_id']=$patient_registration_id; 
      $data['patient_appointment_id']=$pat_app_id; 
      $data['lastvisitdate']=date("d-m-Y", strtotime($patient_apdetails->appointment_date));

      $data['doc_examination_id']=trim($this->input->post('doc_examination_id')); 
      $data['actionflag']=trim($this->input->post('actionflag')); 
      $patientwhite_details=$this->db->get_where('whitecell',"patient_appointment_id=$pat_app_id  and patient_registration_id=$patient_registration_id")->row();
      if($this->input->post('doc_examination_id'))
      {
        $data['docc_id']='';
        $data['checkupdoctorname']=$this->Examination_model->getcheckdoctorname($patient_registration_id);
        if($patientwhite_details)
        {
        $data['bp']=$patientwhite_details->bp; 
        $data['sugar']=$patientwhite_details->sugar; 
        $data['temprature']=$patientwhite_details->temprature; 
       }
       else
       {
        $data['sugar']='';
        $data['bp']='';
        $data['temprature']='';
       }
      }
      else
      {
        $data['docc_id']=$patient_apdetails->doctor_id; 
        $data['checkupdoctorname']='';
        $data['sugar']='';
        $data['bp']='';
        $data['temprature']='';
      }
      
  
      $var_array=array($this->session->userdata('office_id'));
      $data['doctors']=$this->Common_model->getdoctors($var_array);
     
      $content=$this->load->view('transaction/examination/insert',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);  
   }
    public function getcompalints(){
        $var_array=array($this->session->userdata('office_id'));
        $his_id=$this->input->post('his_id');
        $response=$this->Examination_model->getcomplaintsdata($var_array);
             $comrem='';
             $medirem='';
             $opthrem='';
        if($his_id){
             $remall=$this->Examination_model->getallrem($his_id);

             $comrem=$remall[0]['gen_comp_remarks'];
             $medirem=$remall[0]['gen_medi_remarks'];
             $opthrem=$remall[0]['gen_opth_remarks'];
         }
        if($response)
        {
                        $html='';
                                  $sl=1;
                            foreach ($response as $data) 
                            {
                                $chklefteye='';
                                $chkbeeye=$chkrighteye=$rem='';
                                if($his_id)
                                {
                                    $var_arrayy=array($his_id,$data['complaints_id']);
                                    $responsecomp=$this->Examination_model->alreadysavecompmdl($var_arrayy);
                                    if($responsecomp){
                                    if($responsecomp[0]['complaints_id']==$data['complaints_id'])
                                    {
                                        if($responsecomp[0]['eye_left']==1)
                                        {
                                           $chklefteye='checked'; 
                                        }

                                        if($responsecomp[0]['eye_right']==1)
                                        {
                                           $chkrighteye='checked'; 
                                        }

                                        if($responsecomp[0]['eye_be']==1)
                                        {
                                           $chkbeeye='checked'; 
                                        }

                                        $rem=$responsecomp[0]['remarks'];
                                    }
                                  }
                                    
                                }
                               
                               $left='L<input type="checkbox" class="compleft" name="comp_left[]" '.$chklefteye.'  value="'.$data['complaints_id'].'">&nbsp;&nbsp;R<input   type="checkbox"  name="comp_right[]" '.$chkrighteye.'  value="'.$data['complaints_id'].'">&nbsp;&nbsp;BE<input   type="checkbox"  name="comp_be[]" '.$chkbeeye.'  value="'.$data['complaints_id'].'">';
                               $html.='<tr>
                                         <td>'.$sl.'</td>
                                         <td>'.$data['name'].'</td>
                                         <td>'.$left.'</td>
                                         <td>
                                            <input type="text"   class="form-control comprem" id="remarks" name="comp_remrks[]"  value="'.$rem.'">
                                            <input type="hidden"   class="form-control comprem" id="complaints_id" name="complaints_id[]"  value="'.$data['complaints_id'].'">
                                         </td>
                                       </tr>';
                                       $sl++;
                            }
                            $htmlcom='<br/><div class="row"><div class="col-md-12"><label>General Remarks</label><textarea id="gen_comp_remarks" class="form-control" name="gen_comp_remarks">'.$comrem.'</textarea></div></div>';

                              $opth=$this->Examination_model->getoptho($var_array);

                               $opthtml='<table class="table table-bordered table-hover" id="opthold" style="width:100%;">
                                  <thead>
                                      <tr><th colspan="4" style="text-align:center;">Ophthalmic History</th></tr>
                                          <th>Sl No</th>
                                          <th>Name</th>
                                          <th>EYE</th>
                                          <th>Remarks</th>
                                      </tr>
                                  </thead>
                                  <tbody>';
                                  $sl=1;
                            foreach ($opth as $data) 
                            {

                                $chklefteye='';
                                $chkbeeye=$chkrighteye=$rem='';
                                if($his_id)
                                {
                                    $var_arrayy=array($his_id,$data['ophthalmic_history_id']);
                                    $responseopth=$this->Examination_model->alreadysaveopthmdl($var_arrayy);
                                    if($responseopth){
                                    if($responseopth[0]['ophthalmic_history_id']==$data['ophthalmic_history_id'])
                                    {
                                        if($responseopth[0]['eye_left']==1)
                                        {
                                           $chklefteye='checked'; 
                                        }

                                        if($responseopth[0]['eye_right']==1)
                                        {
                                           $chkrighteye='checked'; 
                                        }
                                         if($responseopth[0]['eye_be']==1)
                                        {
                                           $chkbeeye='checked'; 
                                        }
                                        $rem=$responseopth[0]['remarks'];
                                    }
                                  }
                                    
                                }

                               
                               $left='L<input type="checkbox"  name="opth_left[]" '.$chklefteye.'   value="'.$data['ophthalmic_history_id'].'">&nbsp;&nbsp;R<input type="checkbox"  name="opth_right[]" '.$chkrighteye.' value="'.$data['ophthalmic_history_id'].'">&nbsp;&nbsp;BE<input   type="checkbox"  name="opth_be[]" '.$chkbeeye.'  value="'.$data['ophthalmic_history_id'].'">';
                               $opthtml.='<tr>
                                         <td>'.$sl.'</td>
                                         <td>'.$data['name'].'</td>
                                         <td>'.$left.'</td>
                                         <td>
                                            <input type="text" class="form-control" id="remarks" name="opth_remrks[]" value="'.$rem.'">
                                             <input type="hidden"   class="form-control comprem" id="ophthalmic_history_id" name="ophthalmic_history_id[]"  value="'.$data['ophthalmic_history_id'].'">
                                         </td>
                                       </tr>';
                                       $sl++;
                            }
                            $opthtml.='</tbody>
                               </table><br/><div class="row"><div class="col-md-12"><label>General Remarks</label><textarea class="form-control" name="gen_opth_remarks" id="gen_opth_remarks">'.$opthrem.'</textarea></div></div>';

                              $medihis=$this->Examination_model->getmedi($var_array);

                               $medhtml='<table class="table table-bordered table-hover" id="medicalhist" style="width:100%;">
                                  <thead>
                                      <tr><th colspan="4" style="text-align:center;">Medical History</th></tr>
                                          <th>Sl No</th>
                                          <th>Name</th>
                                          <th>Remarks</th>
                                      </tr>
                                  </thead>
                                  <tbody>';
                                  $sl=1;
                            foreach ($medihis as $data) 
                            {
                               
                              $chklefteye='';
                                $chkrighteye=$rem='';
                                if($his_id)
                                {
                                    $var_arrayy=array($his_id,$data['medical_history_id']);
                                    $responsemedi=$this->Examination_model->alreadysavemedmdl($var_arrayy);
                                    if($responsemedi){
                                    if($responsemedi[0]['medical_history_id']==$data['medical_history_id'])
                                    {
                                        
                                        $rem=$responsemedi[0]['remarks'];
                                    }
                                  }
                                    
                                }

                               $medhtml.='<tr>
                                         <td>'.$sl.'</td>
                                         <td>'.$data['name'].'</td>
                                         <td>
                                            <input type="text" class="form-control" id="remarks" name="medihis_remrks[]" value="'.$rem.'">
                                             <input type="hidden"   class="form-control comprem" id="medical_history_id" name="medical_history_id[]"  value="'.$data['medical_history_id'].'">
                                         </td>
                                       </tr>';
                                       $sl++;
                            }
                            $medhtml.='</tbody>
                               </table><br/><div class="row"><div class="col-md-12"><label>General Remarks</label><textarea class="form-control" name="gen_medi_remarks" id="gen_medi_remarks">'.$medirem.'</textarea></div></div>';



             echo json_encode(array('msg' =>'success','comrem' =>$htmlcom,'getdata' =>$html,'optho' =>$opthtml,'medi' =>$medhtml,'error'=>'','error_message' =>''));
        }
        else
        {
            echo json_encode(array('msg' =>'','error'=>'','error_message' =>''));
        }

        
 }
        
      private function fetch_data() 
       {
           
           $office_id=$this->session->office_id;
            if(!$this->input->post('comp_left'))
           {
               $comp_left=0;
           }
           if(!$this->input->post('comp_right'))
           {
               $comp_right=0;
           }
           $drop='';
           if($this->input->post('dialysiscon')==2)
           {
             $drop=$this->input->post('dialysis_drops');
           }
           $cflag=0;
           if($this->input->post('doc_examination_id'))
           {
             if($this->input->post('actionflagg')==1)
             {
                $cflag=0;
             }
             else
             {
                $cflag=1;
             }
              
           }
           $return=array(
              "examination_complaints"=>array(
                   'complaints_id'=>$this->input->post('complaints_id'),
                   'eye'=>$this->input->post('comp_right'),
                   'remarks'=>$this->input->post('comp_remrks'),
               ),
               "examination_medical_history"=>array(
                   'medical_history_id'=>$this->input->post('medical_history_id'),
                   'eye'=>$this->input->post('comp_right'),
                   'remarks'=>$this->input->post('comp_remrks'),
               ),
               "examination_ophthalmic_history"=>array(
                   'ophthalmic_history_id'=>$this->input->post('ophthalmic_history_id'),
                   'eye'=>$this->input->post('comp_right'),
                   'remarks'=>$this->input->post('comp_remrks'),
               ),
             "examination_eye"=>array(
                'eye_complaints_id'=>$this->input->post('eye_complaints_id'),
                'lefteye'=>$this->input->post('lefteye'),
                'righteye'=>$this->input->post('righteye'),
               ),
               "addexamination"=>array(
                  "dialysis_con"=>$this->input->post('dialysiscon'),
                  "dialysis_drop"=>$drop,
                  "confirm_flag"=>$cflag,
                  "optho_action"=>$this->input->post('optho_action'),
                  "medicine_doc_remarks"=>$this->input->post('medicine_doc_remarks'),
                  "gen_comp_remarks"=>$this->input->post('gen_comp_remarks'),
                  "gen_medi_remarks"=>$this->input->post('gen_medi_remarks'),
                  "gen_opth_remarks"=>$this->input->post('gen_opth_remarks'),
                  "family_history"=>$this->input->post('family_history'),
                  "drug_history"=>$this->input->post('drug_history'),
                  "current_meditation"=>$this->input->post('current_meditation'),
                  "addmedhistory_id"=>$this->input->post('addmedhistory_id'),
                  "history_id"=>$this->input->post('history_id'),
                  "clinical_advisor"=>$this->input->post('clinical_advisor'),
                  "doc_action"=>$this->input->post('doc_action'),
                  "pre1"=>$this->input->post('pre1'),
                  "pre2"=>$this->input->post('pre2'),
                  "pre3"=>$this->input->post('pre3'),
                  "pre4"=>$this->input->post('pre4'),
                  "pre5"=>$this->input->post('pre5'),
                  "pre6"=>$this->input->post('pre6'),
                  "pre7"=>$this->input->post('pre7'),
                  "pre8"=>$this->input->post('pre8'),
                  "pre9"=>$this->input->post('pre9'),
                  "pre10"=>$this->input->post('pre10'),
                  "pre11"=>$this->input->post('pre11'),
                  "pre12"=>$this->input->post('pre12'),
                  "pre_remarks"=>$this->input->post('pre_remarks'),
                  "vis1"=>$this->input->post('vis1'),
                  "vis2"=>$this->input->post('vis2'),
                  "vis3"=>$this->input->post('vis3'),
                  "vis4"=>$this->input->post('vis4'),
                  "vis5"=>$this->input->post('vis5'),
                  "vis6"=>$this->input->post('vis6'),
                  "vis7"=>$this->input->post('vis7'),
                  "vis8"=>$this->input->post('vis8'),
                  "vis9"=>$this->input->post('vis9'),
                  "vis10"=>$this->input->post('vis10'),
                  "cur1"=>$this->input->post('cur1'),
                  "cur2"=>$this->input->post('cur2'),
                  "cur3"=>$this->input->post('cur3'),
                  "cur4"=>$this->input->post('cur4'),
                  "cur5"=>$this->input->post('cur5'),
                  "cur6"=>$this->input->post('cur6'),
                  "cur8"=>$this->input->post('cur7'),
                  "cur8"=>$this->input->post('cur8'),
                  "cur9"=>$this->input->post('cur9'),
                  "cur10"=>$this->input->post('cur10'),
                  "cur11"=>$this->input->post('cur11'),
                  "cur12"=>$this->input->post('cur12'),
                  "cur13"=>$this->input->post('cur13'),
                  "cur14"=>$this->input->post('cur14'),
                  "cur15"=>$this->input->post('cur15'),
                  "cur16"=>$this->input->post('cur16'),
                  "obj1"=>$this->input->post('obj1'),
                  "obj2"=>$this->input->post('obj2'),
                  "obj3"=>$this->input->post('obj3'),
                  "obj4"=>$this->input->post('obj4'),
                  "obj5"=>$this->input->post('obj5'),
                  "obj6"=>$this->input->post('obj6'),
                  "obj7"=>$this->input->post('obj7'),
                  "obj8"=>$this->input->post('obj8'),
                  "obj9"=>$this->input->post('obj9'),
                  "obj10"=>$this->input->post('obj10'),
                  "obj11"=>$this->input->post('obj11'),
                  "obj12"=>$this->input->post('obj12'),
                  "obj13"=>$this->input->post('obj13'),
                  "obj14"=>$this->input->post('obj14'),
                  "obj15"=>$this->input->post('obj15'),
                  "ar1"=>$this->input->post('ar1'),
                  "ar2"=>$this->input->post('ar2'),
                  "ar3"=>$this->input->post('ar3'),
                  "ar4"=>$this->input->post('ar4'),
                  "ar5"=>$this->input->post('ar5'),
                  "ar6"=>$this->input->post('ar6'),
                  "ar7"=>$this->input->post('ar7'),
                  "ar8"=>$this->input->post('ar8'),
                  "ar9"=>$this->input->post('ar9'),
                  "ar10"=>$this->input->post('ar10'),
                  "man1"=>$this->input->post('man1'),
                  "man2"=>$this->input->post('man2'),
                  "man3"=>$this->input->post('man3'),
                  "man4"=>$this->input->post('man4'),
                  "man5"=>$this->input->post('man5'),
                  "man6"=>$this->input->post('man6'),
                  "man7"=>$this->input->post('man7'),
                  "man8"=>$this->input->post('man8'),
                  "man9"=>$this->input->post('man9'),
                  "man10"=>$this->input->post('man10'),
                  "spe1"=>$this->input->post('spe1'),
                  "spe2"=>$this->input->post('spe2'),
                  "spe3"=>$this->input->post('spe3'),
                  "spe4"=>$this->input->post('spe4'),
                  "spe5"=>$this->input->post('spe5'),
                  "spe6"=>$this->input->post('spe6'),
                  "spe7"=>$this->input->post('spe7'),
                  "spe8"=>$this->input->post('spe8'),
                  "spe9"=>$this->input->post('spe9'),
                  "spe10"=>$this->input->post('spe10'),
                  "spe11"=>$this->input->post('spe11'),
                  "spe12"=>$this->input->post('spe12'),
                  "spe13"=>$this->input->post('spe13'),
                  "spe14"=>$this->input->post('spe14'),
                  "spe15"=>$this->input->post('spe15'),
                  "spe16"=>$this->input->post('spe16'),
                  "con1"=>$this->input->post('con1'),
                  "con2"=>$this->input->post('con2'),
                  "con3"=>$this->input->post('con3'),
                  "con4"=>$this->input->post('con4'),
                  "con5"=>$this->input->post('con5'),
                  "con6"=>$this->input->post('con6'),
                  "con7"=>$this->input->post('con7'),
                  "con8"=>$this->input->post('con8'),
                  "con9"=>$this->input->post('con9'),
                  "con10"=>$this->input->post('con10'),
                  "con11"=>$this->input->post('con11'),
                  "con12"=>$this->input->post('con12'),
                  "con13"=>$this->input->post('con13'),
                  "con14"=>$this->input->post('con14'),
                  "con15"=>$this->input->post('con15'),
                  "con16"=>$this->input->post('con16'),
                  "pmt1"=>$this->input->post('pmt1'),
                  "pmt2"=>$this->input->post('pmt2'),
                  "pmt3"=>$this->input->post('pmt3'),
                  "pmt4"=>$this->input->post('pmt4'),
                  "pmt5"=>$this->input->post('pmt5'),
                  "pmt6"=>$this->input->post('pmt6'),
                  "pmt7"=>$this->input->post('pmt7'),
                  "pmt8"=>$this->input->post('pmt8'),
                  "pmt9"=>$this->input->post('pmt9'),
                  "pmt10"=>$this->input->post('pmt10'),
                  "pmt11"=>$this->input->post('pmt11'),
                  "pmt12"=>$this->input->post('pmt12'),
                  "pmt13"=>$this->input->post('pmt13'),
                  "pmt14"=>$this->input->post('pmt14'),
                  "pmt15"=>$this->input->post('pmt15'),
                  "pmt16"=>$this->input->post('pmt16'),
                  "material"=>$this->input->post('material'),
                  "cr"=>$this->input->post('cr'),
                  "usage"=>$this->input->post('usage'),
                  "typev"=>$this->input->post('typev'),
                  "ipd"=>$this->input->post('ipd'),
                  "pdre"=>$this->input->post('pdre'),
                  "le"=>$this->input->post('le'),
                  "segmentre"=>$this->input->post('segmentre'),
                  "lle"=>$this->input->post('lle'),
                  "followup"=>$this->input->post('followup'),
                  "workup"=>$this->input->post('workup'),
                  "mm"=>$this->input->post('mm'),
                  "www"=>$this->input->post('www'),
                  "dayss"=>$this->input->post('dayss'),
                  "d_date"=>$this->input->post('d_date'),
                  "sos"=>$this->input->post('sos'),
                  "plan_of_action"=>$this->input->post('plan_of_action'),
                  "opth_user_comments"=>$this->input->post('opth_user_comments'),
                  "patient_registration_id"=>$this->input->post('patient_registration_id'),
                  "patient_appointment_id"=>$this->input->post('patient_appointment_id'),
                  "doctor_id"=>$this->input->post('doctor_id'),
                  "treatmentplan_ref_id"=>$this->input->post('treatmentplan_refid'),
                  "examination_date"=>$this->input->post('examination_datee'),
                  "login_id"=>$this->session->userdata('login_id'),
                  'office_id'=> $office_id
               ),
             "examination_investigation"=>array(
                 "charge_id"=>$this->input->post('chargesid'),
                 "particulars_id"=>$this->input->post('particularsid'),
                 "rate"=>$this->input->post('rate'),
                 "calrow_id"=>$this->input->post('calrow_id')
             )
           
           );
            return $return;
       }
       public function addfetch_data($key)
       {
          
           $return=array(
              "examination_complaints"=>array(
                   'complaints_id'=>$this->input->post('complaints_id'),
                   'comp_left'=>$this->input->post('comp_left'),
                   'comp_right'=>$this->input->post('comp_right'),
                   'comp_be'=>$this->input->post('comp_be'),
                   'temp_id'=>$key,
                   'remarks'=>$this->input->post('comp_remrks'),
               ),
               "examination_medical_history"=>array(
                   'medical_history_id'=>$this->input->post('medical_history_id'),
                   'temp_id'=>$key,
                   'remarks'=>$this->input->post('medihis_remrks'),
               ),
               "examination_ophthalmic_history"=>array(
                   'ophthalmic_history_id'=>$this->input->post('ophthalmic_history_id'),
                   'opth_left'=>$this->input->post('opth_left'),
                   'opth_right'=>$this->input->post('opth_right'),
                   'opth_be'=>$this->input->post('opth_be'),
                   'temp_id'=>$key,
                   'remarks'=>$this->input->post('opth_remrks'),
               ),
             "examination_eye"=>array(
                'eye_complaints_id'=>$this->input->post('eye_complaints_id'),
                'lefteye'=>$this->input->post('lefteye'),
                'righteye'=>$this->input->post('righteye'),
                'temp_id'=>$key,
               )
            
           );
            return $return;
       }
        public function addmedfetch_data($key)
       {
          
           $return=array(
             "doctor_examination"=>array(
                'medicine_id'=>$this->input->post('medicine_id'),
                'instruction'=>$this->input->post('instruction'),
                'nodays'=>$this->input->post('days'),
                'qty'=>$this->input->post('qty'),
                'sdate'=>$this->input->post('sdate'),
                'tdate'=>$this->input->post('tdate'),
                'med_eye'=>$this->input->post('medeye'),
                'temp_id'=>$key,
               )
           );
            return $return;
       }
 public function generateRandomString($length = 35) {
    $t=time();
    $characters = '0123456789'.$t.'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
 public function addhistorysave()
   {
         
            $key= $this->generateRandomString();
            $data=$this->addfetch_data($key);
            $getresult=$this->Examination_model->savehistorymodel($data);
            if($getresult)
            {
               echo json_encode(array('msg' =>'Saved Successfully','key'=>$key,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
        
      
   }

    public function addmedhistorysave()
   {
         
            $key= $this->generateRandomString();
            $data=$this->addmedfetch_data($key);
            $getresult=$this->Examination_model->savemedhistorymodel($data);
            if($getresult)
            {
               echo json_encode(array('msg' =>'Saved Successfully','key'=>$key,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
        
      
   }

   public function getmedicineinstruction()
   {    
            $getresult=$this->Examination_model->getmedicineinstruction($this->input->post('val'),$this->input->post('catid'));
            if($getresult)
            {
                $html='<div class="list-group">';
                $dl=1;
                foreach($getresult as $data)
                {
                    $name=$data['name'];
                    $ytt='';
                    if($dl==1)
                    {
                        $ytt='active';
                    }
                    $html.='<a class="list-group-item list-group-item-action '.$ytt.'" style="cursor:pointer;padding: .2rem .5rem;" onclick="addtextboxvalue('.$this->input->post('sl').','.$dl.')">'.$data['name'].'<input type="hidden" id="strchk'.$dl.'"  value="'.$name.'"></a>';
                    $dl++;
                }
                $html.='</div>';
               echo json_encode(array('msg' =>'Saved Successfully','htmldata'=>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
        
      
   }

   public function showhistorydata()
   {
       
            $key=trim(htmlentities($this->input->post('key')));

            $comprem=trim(htmlentities($this->input->post('comprem')));
            $opthrem=trim(htmlentities($this->input->post('opthrem')));
            $medrem=trim(htmlentities($this->input->post('medrem')));

            $current_meditation=trim(htmlentities($this->input->post('current_meditation')));
            $family_history=trim(htmlentities($this->input->post('family_history')));
            $drug_history=trim(htmlentities($this->input->post('drug_history')));
            $var_array=array($key,$this->session->userdata('office_id'));
            $getcomp=$this->Examination_model->expgetcomplaintsdata($var_array);
            $getmed=$this->Examination_model->getmedhis($var_array);
            $getopth=$this->Examination_model->getopth($var_array);
            $getdoctorprescription=$this->Examination_model->getdoctormedicinemodel($var_array);
            $opth=$medd=$compprev='';
            if($getcomp!='' || $getdoctorprescription!='')
            { 
               $comp='<tr><td>';
               foreach($getcomp as $data)
               {
                  $comp.=''.$data['name'].'  '.$data['lefteye'].' '.$data['righteye'].'  '.$data['remarks'].'<br/>';
                  $compprev.=''.$data['name'].'  '.$data['lefteye'].' '.$data['righteye'].'  '.$data['remarks'].'<br/>';
               }
               $comp.='Remarks:'.$comprem;
              

              
               foreach($getmed as $datamed)
               {
                  $medd.=''.$datamed['name'].'   '.$datamed['remarks'].'<br/>';
               }
               $medd.='Remarks:'.$medrem;

              
               foreach($getopth as $dasta)
               {
                  $opth.=''.$dasta['name'].'  '.$dasta['lefteye'].' '.$dasta['righteye'].'  '.$dasta['remarks'].'<br/>';
               }

               $opth.='Remarks:'.$opthrem;

               $comp.='</td><td>'.$current_meditation.'</td></tr>';

               
               $otherhistory='<tr><td>'.$opth.'</td><td>'.$medd.'</td><td>'.$family_history.'</td><td>'.$drug_history.'</td></tr>';

               
               $docc='';
               if($getdoctorprescription)
               {
               
                $docc='<button  type="button" onclick="printdata()" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr><th>SL NO</th><th>Drug Name</th><th>Instruction</th><th>No Of Days</th><th>Qty</th><th style="display:none;">Start Date</th><th style="display:none;">End Date</th><th>Eye</th></tr></thead><tbody>';
                 $sl=0;
                 foreach($getdoctorprescription as $data)
                 {
                    $sl++;
                    $docc.='<tr><td>'.$sl.'</td><td>'.$data['drugname'].'</td><td>'.$data['instruction'].'</td><td>'.$data['nodays'].'</td><td>'.$data['qty'].'</td><td style="display:none;">'.$data['sdate'].'</td><td style="display:none;">'.$data['tdate'].'</td><td>'.$data['med_eye'].'</td></tr>';
                 }
                  $docc.='</tbody></table></div>';
               }

               echo json_encode(array('msg' =>'Saved Successfully','compprev'=>$compprev,'comp'=>$comp,'otherhistory'=>$otherhistory,'docmed'=>$docc,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       
      
   }

    public function showmedhistorydata()
   {
       
            $key=trim(htmlentities($this->input->post('key')));
            $var_array=array($key,$this->session->userdata('office_id'));
            $getdoctorprescription=$this->Examination_model->getdoctormedicinemodel($var_array);
            $opth=$medd='';
             $sl=0;
            if($getdoctorprescription!='')
            { 
               
               $docc='';
               if($getdoctorprescription)
               {
               
               
                
                 foreach($getdoctorprescription as $data)
                 {
                    $sl++;
                    $be=$le=$re=$na='';
                    if($data['med_eye']=='BE')
                    {
                        $be='selected';
                    }
                    if($data['med_eye']=='LE')
                    {
                        $le='selected';
                    }
                    if($data['med_eye']=='RE')
                    {
                        $re='selected';
                    }
                    if($data['med_eye']=='N/A')
                    {
                        $na='selected';
                    }
                    $docc.='<tr><td>'.$data['drugname'].'</td>
                                <td>
                                 <input type="hidden" class="form-control" id="medicine_id_'.$sl.'" name="medicine_id[]" value="'.$data['medicine_id'].'">
                                 <input type="text" class="form-control" id="instruction_'.$sl.'" name="instruction[]" onkeyup="getlistdescription(this.value,'.$data['category_id'].','.$sl.')" value="'.$data['instruction'].'"><span id="search_result'.$sl.'"></span>
                                </td>
                                <td>
                                  <input type="text" class="form-control" id="days_'.$sl.'" name="days[]" value="'.$data['nodays'].'">
                                </td>
                                <td>
                                  <input type="text" class="form-control" id="qty_'.$sl.'" name="qty[]" value="'.$data['qty'].'">
                                </td>
                                <td style="display:none;">
                                  <input type="date" class="form-control" id="sdate_'.$sl.'" name="sdate[]" value="'.$data['ssdate'].'">
                                </td>
                                <td style="display:none;"><input type="date" class="form-control" id="tdate_'.$sl.'" name="tdate[]" value="'.$data['ttdate'].'"></td>
                                <td>
                                <select class="form-control" name="medeye[]" id="medeye_'.$sl.'">
                                    <option value="BE" '.$be.'>BE</option>
                                    <option value="LE" '.$le.'>LE</option>
                                    <option value="RE" '.$re.'>RE</option>
                                    <option value="N/A" '.$na.'>N/A</option>
                                </select></td>
                                <td>
                                    <a  onclick="$(this).parent().parent().remove();calcnet();" class="input_column">
                                    <button class="btn btn-danger btnDelete btn-sm">
                                       <i class="la la-trash"></i>
                                    </button>
                                    </a>
                                </td>
                                </tr>';
                 }
                  
               }

               echo json_encode(array('msg' =>'Saved Successfully','docmed'=>$docc,'rowcnt'=>$sl,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       
      
   }
   public function doctorprintmedicineprescription()
   {
       $this->form_validation->set_rules('pid', 'ID', 'trim|required|min_length[1]|max_length[40]|numeric');
       $this->form_validation->set_rules('paid', 'ID', 'trim|required|min_length[1]|max_length[30]|numeric');
       $this->form_validation->set_rules('key', 'ID', 'trim|required|min_length[1]|max_length[40]');
       if($this->form_validation->run() == TRUE)
       {
             $key=$this->input->post('key');
             $pid=$this->input->post('pid');
             $paid=$this->input->post('paid');
             $this->Examination_model->print_billgen($key,$pid,$paid,$this->session->userdata('office_id'));
             
       }
        else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }

   }
        
   public function getmedinedetails()
   {
        $this->form_validation->set_rules('medid', 'Medicine ID', 'trim|required|min_length[1]|max_length[30]');
       if($this->form_validation->run() == TRUE)
       {
            $var_array=array($this->input->post('medid'),$this->session->userdata('office_id'));
            $getresult=$this->Common_model->getallmedicineind($var_array);
            if($getresult)
            {
               echo json_encode(array('msg' =>'Saved Successfully','getdata'=>$getresult,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
        
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }
   public function treatmentpalnfetch_data()
       {
          
           $return=array(
              "examination_treatmentplan"=>array(
                   'temp_id'=>$this->input->post('treatmentplan_refid'),
                   'eye'=>$this->input->post('eyetreatmentplan'),
                   'chargetype_id'=>$this->input->post('treatmentplan'),
                   'particular_id'=>$this->input->post('particular_treatment'),
                   'doctor_id'=>$this->input->post('treatmentplandoctor_id'),
                   'appointment_date'=>$this->input->post('treatmentplan_appointmentdate'),
                   'counseling_id'=>$this->input->post('treatmentplan_counseling'),
                   'parent_id'=>$this->session->userdata('parent_id'),
                    'login_id'=>$this->session->userdata('login_id'),
                    'office_id'=> $this->session->userdata('office_id')
               )
           );
            return $return;
       }
    public function savetreatmentplan()
   {
      $this->form_validation->set_rules('treatmentplan_refid', 'Treatment Plan Reference ID', 'trim|required|min_length[1]|max_length[40]');
      $this->form_validation->set_rules('eyetreatmentplan', 'Patient Appointment ID', 'trim|required|numeric');
      $this->form_validation->set_rules('particular_treatment', 'Particulars', 'trim|required|numeric');
      $this->form_validation->set_rules('treatmentplandoctor_id', 'Doctor   ID', 'trim|required|numeric');
       if($this->form_validation->run() == TRUE)
       {
            $data=$this->treatmentpalnfetch_data();
            $getresult=$this->Examination_model->savetreatmentplanmdl($data);
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
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }
  public function savedata()
   {
      $this->form_validation->set_rules('patient_registration_id', 'Patient Registration ID', 'trim|required|min_length[1]|max_length[30]');
      $this->form_validation->set_rules('patient_appointment_id', 'Patient Appointment ID', 'trim|required|numeric');
      $this->form_validation->set_rules('doctor_id', 'Doctor   ID', 'trim|required|numeric');
       if($this->form_validation->run() == TRUE)
       {
         // $key=trim(htmlentities($this->input->post('key')));
         // $var_array=array($key,$this->session->userdata('office_id'));
         // $chk_duplication=$this->Category_model->checkingval($var_array);
         // if($chk_duplication[0]['cnt']==0)
         // {
            
            $data=$this->fetch_data();
            $getresult=$this->Examination_model->saveexaminationmodel($data);
            if($getresult)
            {

               echo json_encode(array('msg' =>'Saved Successfully','error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
         // }
         // else
         // {
         //         echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
         // }
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }

    private function folfetch_data() 
    {
        
        $office_id=$this->session->office_id;
        return array(
            'patient_registration_id'=>trim($this->input->post('patient_registration_id')),
            'patient_followup_date'=>trim($this->input->post('d_date')),
            'parent_id'=>$this->session->userdata('parent_id'),
            'login_id'=>$this->session->userdata('login_id'),
            'office_id'=> $this->session->userdata('office_id')
           );
    }


     public function updatedata()
   {
      $this->form_validation->set_rules('patient_registration_id', 'Patient Registration ID', 'trim|required|min_length[1]|max_length[30]');
      $this->form_validation->set_rules('patient_appointment_id', 'Patient Appointment ID', 'trim|required|numeric');
      $this->form_validation->set_rules('doctor_id', 'Doctor   ID', 'trim|required|numeric');
      $this->form_validation->set_rules('examination_id', 'Edit   ID', 'trim|required|numeric');
       if($this->form_validation->run() == TRUE)
       {
            $edit_id=trim(htmlentities($this->input->post('examination_id')));
         // $var_array=array($key,$this->session->userdata('office_id'));
         // $chk_duplication=$this->Category_model->checkingval($var_array);
         // if($chk_duplication[0]['cnt']==0)
         // {
            
            $data=$this->fetch_data();
            if($this->input->post('doc_examination_id'))
           {
             if($this->input->post('actionflagg')==1)
             {
                
             }
             else
             {
                if($this->input->post('followup'))
                {
                    $d_date=$this->input->post('d_date');
                    $this->load->model('Patients_registration_model');
                    $datfa=$this->folfetch_data();
                    $this->Patients_registration_model->savefoldata($datfa);
                 }
             }
              
           }
            $getresult=$this->Examination_model->updateexaminationmodel($data,$edit_id);
            if($getresult)
            {

               echo json_encode(array('msg' =>'Updated Successfully','error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
            }
         // }
         // else
         // {
         //         echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
         // }
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }
    public function getexaminationdatafromdashboard()
   {
       
            $typeuser=trim(htmlentities($this->input->post('typeuser')));
            if($typeuser==3)
            {
                $flag=0;
                $fl=1;
            }
            else
            {
                $flag=1;
                 $fl=2;
            }
            $doc_exam=0;
            $examination_date=trim(htmlentities($this->input->post('examination_date')));
            $var_array=array($examination_date,$this->session->userdata('office_id'));
            $getresult=$this->Examination_model->getexaminationindividualdatafromdashboard($var_array);

           
            if($getresult)
            { 
               $html='<div class="table-responsive"><table class="table table-bordered table-hover" id="ex_datatable"><thead></tr><th>SL No</th><th>Date</th><th>Patient Name</th><th>MRD NO</th><th>Age/YY MM</th><th>Mobile No</th><th>Doctor ID</th><th>Print</th><th>Edit</th><th>Delete</th></tr></thead><tbody>';
               $i=1;
               foreach($getresult as $data)
               {
                  if($data['gender']==1)
                  {
                     $gen='Male';
                  }
                  elseif($data['gender']==2)
                  {
                     $gen='Female';
                  }
                  else
                  {
                     $gen='Transgender';
                  }
                  $dia='';
                  if($data['dialysis_con']==2)
                  {
                    $dia='<span class="badge badge-success">Dilation</span>';
                  }

                   //$btnfn='<td><button onclick=editdata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-pencil"></i></button></td><td><button onclick=deletedata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button></td>';


                  if($data['confirm_flag']==0)
                  {
                     $btnfn='<td><button  onclick=printdataexamination('.$data['patient_registration_id'].','.$data['patient_appointment_id'].','.$data['examination_id'].','.$fl.')   type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-pencil"></i></button></td>
                      <td><button onclick=deletedata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button></td>';
                  }
                  else
                  {
                        $btnfn='<td><button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button></td><td><button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button></td>';
                  }
                  if($flag==1)
                  {
                    $btnfn='<td><button  onclick=printdataexamination('.$data['patient_registration_id'].','.$data['patient_appointment_id'].','.$data['examination_id'].','.$fl.')   type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-pencil"></i></button></td>
                      <td><button onclick=deletedata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button></td>';
                  }

                  $patient_registration_id=$data['patient_registration_id'];

                  $sqll2 = "select count(*) as cnt from patient_appointment  where 
                         patient_registration_id=$patient_registration_id";
                            $result_row1=$this->db->query($sqll2); 
                            $res1= $result_row1->result_array();
                            $cnt=$res1[0]['cnt'];
                            $new='';
                            if($cnt==1)
                            {
                                $new='<span class="badge badge-danger">New</span>';
                                $newclr="style='font-weight:bold;color:red;'";
                            }
                            else
                            {
                                $newclr="style='font-weight:bold;color:blue;'";
                            }
                   

                    $html.='<tr><td>'.$i.'</td><td>'.$data['examination_date'].'</td><td>'.$data['pateint_name'].''.$dia.'</td><td '.$newclr.'>'.$data['mrdno'].'</td><td>'.$gen.''.$data['ageyy'].''.$data['agemm'].'</td><td>'.$data['mobileno'].'</td><td>'.$data['doctorname'].'</td><td><button  type="button" onclick=examinationprint('.$data['examination_id'].') class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button></td>'.$btnfn.'</tr>';
                    $i++;
               }
               $html.='</tbody></table></div>';

               
               
               
               echo json_encode(array('msg' =>'Saved Successfully','dataexam'=>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
      
      
   }

    public function getexaminationdata()
   {
       
            $doc_exam=trim(htmlentities($this->input->post('doc_exam')));
            $examination_date=trim(htmlentities($this->input->post('examination_date')));
            $patient_registration_id=trim(htmlentities($this->input->post('patient_registration_id')));
            $var_array=array($patient_registration_id,$this->session->userdata('office_id'));
            $getresult=$this->Examination_model->getexaminationindividualdata($var_array);
            if($getresult)
            { 
               $html='<div class="table-responsive"><table class="table table-bordered table-hover" id="ex_datatable"><thead></tr><th>SL No</th><th>Date</th><th>Patient Name</th><th>MRD NO</th><th>Age/YY MM</th><th>Mobile No</th><th>Doctor ID</th><th>Print</th><th>Edit</th><th>Delete</th></tr></thead><tbody>';
               $i=1;
               foreach($getresult as $data)
               {
                  if($data['gender']==1)
                  {
                     $gen='Male';
                  }
                  elseif($data['gender']==2)
                  {
                     $gen='Female';
                  }
                  else
                  {
                     $gen='Transgender';
                  }
                  $dia='';
                  if($data['dialysis_con']==2)
                  {
                    $dia='<span class="badge badge-success">Dilation</span>';
                  }
                  
                  $sqll2 = "select count(*) as cnt from patient_appointment  where 
                         patient_registration_id=$patient_registration_id";
                            $result_row1=$this->db->query($sqll2); 
                            $res1= $result_row1->result_array();
                            $cnt=$res1[0]['cnt'];
                            $new='';
                            if($cnt==1)
                            {
                                $new='<span class="badge badge-danger">New</span>';
                                $newclr="style='font-weight:bold;color:red;'";
                            }
                            else
                            {
                                $newclr="style='font-weight:bold;color:blue;'";
                            }


                  if($data['confirm_flag']==0)
                  {
                    $btnfn='<td><button onclick=editdata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-pencil"></i></button></td><td><button onclick=deletedata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button></td>';
                  }
                  else
                  {
                    $btnfn='<td><button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button></td><td><button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button></td>';
                  }
                   if($doc_exam>0)
                   {
                    $btnfn='<td><button onclick=editdata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-pencil"></i></button></td><td><button onclick=deletedata('.$data['examination_id'].')  type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button></td>';
                   }

                    $html.='<tr><td>'.$i.'</td><td>'.$data['examination_date'].'</td><td>'.$data['pateint_name'].''.$dia.'</td><td '.$newclr.'>'.$data['mrdno'].'</td><td>'.$gen.''.$data['ageyy'].''.$data['agemm'].'</td><td>'.$data['mobileno'].'</td><td>'.$data['doctorname'].'</td><td><button  type="button" onclick=examinationprint('.$data['examination_id'].') class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button></td>'.$btnfn.'</tr>';
                    $i++;
               }
               $html.='</tbody></table></div>';

               
               
               
               echo json_encode(array('msg' =>'Saved Successfully','dataexam'=>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
      
      
   }

    public function getalltempl()
   {
      $this->form_validation->set_rules('sel', 'Select templates ID', 'trim|required|min_length[1]|max_length[200]|numeric');
         if($this->form_validation->run() == TRUE)
       {  
            $sel=trim(htmlentities($this->input->post('sel')));
            $var_array=array($sel,$this->session->userdata('office_id'));
            $getresult=$this->Examination_model->getallmedtemp($var_array);
            if($getresult)
            { 
                $html='';
                foreach($getresult as $data)
                {
                    $html.=$data['medicine_id'].',';
                }
               
               echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }

    public function getsavedexamionation()
   {
      $this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[200]');
         if($this->form_validation->run() == TRUE)
       {  
            $examination_date=trim(htmlentities($this->input->post('sdate')));
            $var_array=array($examination_date,$this->session->userdata('office_id'));
            $getresult=$this->Examination_model->getexaminationindividualdatsa($var_array);
            if($getresult)
            { 
               $html='<div class="table-responsive"><table class="table table-bordered table-hover" id="tableid"><thead></tr><th>SL No</th><th>Optometrist Date</th><th>Patient Name</th><th>MRD NO</th><th>Age/YY MM</th><th>Mobile No</th><th>Doctor ID</th><th>Print</th></tr></thead><tbody>';
               $i=1;
               foreach($getresult as $data)
               {
                  if($data['gender']==1)
                  {
                     $gen='Male';
                  }
                  elseif($data['gender']==2)
                  {
                     $gen='Female';
                  }
                  else
                  {
                     $gen='Transgender';
                  }
                  $dia='';
                  if($data['dialysis_con']==2)
                  {
                    $dia='<span class="badge badge-success">Dilation</span>';
                  }
$patient_registration_id=$data['patient_registration_id'];
                     $sqll2 = "select count(*) as cnt from patient_appointment  where 
                         patient_registration_id=$patient_registration_id";
                            $result_row1=$this->db->query($sqll2); 
                            $res1= $result_row1->result_array();
                            $cnt=$res1[0]['cnt'];
                            $new='';
                            if($cnt==1)
                            {
                                $new='<span class="badge badge-danger">New</span>';
                                $newclr="style='font-weight:bold;color:red;'";
                            }
                            else
                            {
                                $newclr="style='font-weight:bold;color:blue;'";
                            }

                    $html.='<tr><td>'.$i.'</td><td>'.$data['opthdate'].'</td><td><a target="_blank" onclick=printdataexamination('.$data['patient_registration_id'].','.$data['patient_appointment_id'].','.$data['examination_id'].',2) >'.$data['pateint_name'].'</a>'.$dia.'</td><td '.$newclr.'>'.$data['mrdno'].'</td><td>'.$gen.''.$data['ageyy'].''.$data['agemm'].'</td><td>'.$data['mobileno'].'</td><td>'.$data['doctorname'].'</td><td><button type="button" class="btn btn-danger" onclick="examinationprint('.$data['examination_id'].')"><i class="la la-print"></i></button></td></tr>';
                    $i++;
               }
               $html.='</tbody></table></div>';

               
               
               
               echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }

   public function getsavedexamionationex()
   {
        $this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[200]');
         if($this->form_validation->run() == TRUE)
       {  
            $examination_date=trim(htmlentities($this->input->post('sdate')));
            $typecond=trim(htmlentities($this->input->post('typecond')));
            $utype=trim(htmlentities($this->input->post('utype')));
            $var_array=array($examination_date,$typecond,$this->session->userdata('office_id'));
            if($utype==2)
            {
                $fl=2;
                 $getresult=$this->Examination_model->getexaminationindividualdatsaexdoc($var_array);
            }
            else
            {
                $fl=1;
               $getresult=$this->Examination_model->getexaminationindividualdatsaex($var_array);
             }
            
           
            if($getresult)
            { 
                if($typecond==1)
                {
                    $tab='tablepro';
                }
                else
                {
                    $tab='tablein';
                }
               $html='<div class="table-responsive"><table class="table table-bordered table-hover" id="'.$tab.'"><thead></tr><th>SL No</th><th>Optometrist Date</th><th>Patient Name</th><th>MRD NO</th><th>Age/YY MM</th><th>Mobile No</th><th>Doctor ID</th><th>Print</th></tr></thead><tbody>';
               $i=1;
               foreach($getresult as $data)
               {
                  if($data['gender']==1)
                  {
                     $gen='Male';
                  }
                  elseif($data['gender']==2)
                  {
                     $gen='Female';
                  }
                  else
                  {
                     $gen='Transgender';
                  }
                  $dia='';
                  if($data['dialysis_con']==2)
                  {
                    $dia='<span class="badge badge-success">Dilation</span>';
                  }
                  $btmn='';
                  if($data['confirm_flag']==1)
                  {
                    $chkvalfd=$data['pateint_name'];
                    $btmn='';
                    if($utype==3){
                        $btmn='<span class="badge badge-danger">Consultant Updated</span>';
                        $chkvalfd=$data['pateint_name'];
                    }
                  }
                  else
                  {
                    $chkvalfd='<a target="_blank" onclick=printdataexamination('.$data['patient_registration_id'].','.$data['patient_appointment_id'].','.$data['examination_id'].','.$fl.') >'.$data['pateint_name'].'</a>';
                  }
                   $chkvalfd='<a target="_blank" onclick=printdataexamination('.$data['patient_registration_id'].','.$data['patient_appointment_id'].','.$data['examination_id'].','.$fl.') >'.$data['pateint_name'].'</a>';
                            $patient_registration_id=$data['patient_registration_id'];
                            $sqll2 = "select count(*) as cnt from patient_appointment  where 
                         patient_registration_id=$patient_registration_id";
                            $result_row1=$this->db->query($sqll2); 
                            $res1= $result_row1->result_array();
                            $cnt=$res1[0]['cnt'];
                            $new='';
                            if($cnt==1)
                            {
                                $new='<span class="badge badge-danger">New</span>';
                                $newclr="style='font-weight:bold;color:red;'";
                            }
                            else
                            {
                                $newclr="style='font-weight:bold;color:blue;'";
                            }

                    $html.='<tr><td>'.$i.'</td><td>'.$data['opthdate'].'  '.$btmn.'</td><td>'.$chkvalfd.'  '.$dia.'</td><td '.$newclr.'>'.$data['mrdno'].'</td><td>'.$gen.''.$data['ageyy'].''.$data['agemm'].'</td><td>'.$data['mobileno'].'</td><td>'.$data['doctorname'].'</td><td><button type="button" class="btn btn-danger" onclick="examinationprint('.$data['examination_id'].')"><i class="la la-print"></i></button></td></tr>';
                    $i++;
               }
               $html.='</tbody></table></div>';

               
               
               
               echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }



   public function getsavedexamionationexvis()
   {
        $this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[200]');
         if($this->form_validation->run() == TRUE)
       {  
            $examination_date=trim(htmlentities($this->input->post('sdate')));
            $var_array=array($examination_date,$this->session->userdata('office_id'));
            $getresult=$this->Examination_model->getexaminationindividualdatsaexdocvis($var_array);
            if($getresult)
            { 
               $html='<div class="table-responsive"><table class="table table-bordered table-hover" id="tablepro"><thead></tr><th>SL No</th><th> Date</th><th>Patient Name</th><th>MRD NO</th><th>Age/YY MM</th><th>Mobile No</th><th>Doctor ID</th><th>Certificate</th></tr></thead><tbody>';
               $i=1;
               foreach($getresult as $data)
               {
                  if($data['gender']==1)
                  {
                     $gen='Male';
                  }
                  elseif($data['gender']==2)
                  {
                     $gen='Female';
                  }
                  else
                  {
                     $gen='Transgender';
                  }
                  $dia='';
                  if($data['dialysis_con']==2)
                  {
                    $dia='<span class="badge badge-success">Dilation</span>';
                  }
                  $btmn='';
                 
                   $chkvalfd='<a target="_blank" onclick=printcertificate('.$data['examination_id'].') >'.$data['pateint_name'].'</a>';

                            $patient_registration_id=$data['patient_registration_id'];
                            $sqll2 = "select count(*) as cnt from patient_appointment  where 
                         patient_registration_id=$patient_registration_id";
                            $result_row1=$this->db->query($sqll2); 
                            $res1= $result_row1->result_array();
                            $cnt=$res1[0]['cnt'];
                            $new='';
                            if($cnt==1)
                            {
                                $new='<span class="badge badge-danger">New</span>';
                                $newclr="style='font-weight:bold;color:red;'";
                            }
                            else
                            {
                                $newclr="style='font-weight:bold;color:blue;'";
                            }

                    $html.='<tr><td>'.$i.'</td><td>'.$data['opthdate'].'  '.$btmn.'</td><td>'.$chkvalfd.'  '.$dia.'</td><td '.$newclr.'>'.$data['mrdno'].'</td><td>'.$gen.''.$data['ageyy'].''.$data['agemm'].'</td><td>'.$data['mobileno'].'</td><td>'.$data['doctorname'].'</td><td><button type="button" class="btn btn-danger" onclick="printcertificate('.$data['examination_id'].')"><i class="la la-print"></i></button></td></tr>';
                    $i++;
               }
               $html.='</tbody></table></div>';

               
               
               
               echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
            }
            else
            {
                 echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
            }
         
       }
       else
       {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
       }
   }

   

    public function geteditdata()
   {
      $this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
       if($this->form_validation->run() == TRUE)
       {
            $edit_id=trim(htmlentities($this->input->post('getid')));
            $var_array=array($edit_id,$this->session->userdata('office_id'));
            $var_arrayy=array($this->session->userdata('office_id'));
        
            $getmastertable=$this->Examination_model->getsavedatamodel($var_array);
            $geteyecompdata=$this->Examination_model->getallcomp($var_arrayy);
            $geteyecompsaveddata=$this->Examination_model->geteyecompsaveddatamodel($edit_id);
            if($getmastertable)
            {
                $var_array_child=array($edit_id);
                $getdetailsdata=$this->Examination_model->Getdetailstable($var_array_child);
                if($geteyecompdata)
                {
                  $eyepart='';
                  foreach($geteyecompdata as $datae)
                  {
                     $lefteye='';
                     $righteye='';
                     foreach($geteyecompsaveddata as $dataval)
                     {
                        $eye_complaints_id=$dataval['eye_complaints_id'];
                        
                        if($eye_complaints_id==$datae['eye_complaints_id'])
                        {
                           $lefteye=$dataval['lefteye'];
                           $righteye=$dataval['righteye'];
                        }
                     }
                     $eyepart.=' <tr>
                                   <td>
                                   <input type="hidden" name="eye_complaints_id[]" value="'.$datae['eye_complaints_id'].'" class="form-control">
                                   <input type="text" name="righteye[]" class="form-control" value="'.$righteye.'"></td>
                                   <td style="background: #e0e0e057;">'.$datae['name'].'</td>
                                   <td><input type="text" name="lefteye[]" class="form-control" value="'.$lefteye.'"></td>
                               </tr>';
                  }
                }
                $sl=1;
                 $html='';
                if($getdetailsdata)
                {
                   
                    
                    foreach ($getdetailsdata as $datai) {
                
                $sel1=$sel2=$sel3=$sel4="";
               $getparticularname=$this->Common_model->getparticularsmodel($datai['charge_id'],$datai['particulars_id'],$this->session->userdata('office_id'));
               $html.='<tr>
                         <td><a href="#" onclick="$(this).parent().parent().remove();"><button class="btn btn-danger btnDelete btn-sm"><i class="la la-trash"></i></button></a></td>
                         <td>'.$getparticularname[0]['name'].'</td>
                          <td><input type="text" name="rate[]" id="rate_'.$sl.'" class="form-control grid_table" value="'.$datai['rate'].'" ></td>
                         
                      <td style="display:none;">
            <input type="hidden" name="calrow_id[]" id="calrow_id_'.$sl.'" value="'.$sl.'">
            <input type="hidden" name="particularsid[]" id="particularsid_'.$sl.'" value="'.$datai['particulars_id'].'">
            <input type="hidden" name="chargesid[]" id="chargesid_'.$sl.'" value="'.$datai['charge_id'].'">
                     </td>
                         </tr>';
                         $sl++;
              }
                }
                echo json_encode(array('msg'=>'Deleted Successfully','mastertable'=>$getmastertable,'eyepart'=>$eyepart,'examinationcharges'=>$html,'countchk'=>$sl,'error'=>'','error_message' =>''));
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
    public function getrefractiondataobj()
   {
     $var_array=array(4,$this->session->userdata('office_id'));
     $getdata=$this->Common_model->getrefractionmodel($var_array);
     if($getdata)
     {
        

        $html='<form id="edit_form" action="#" method="post"> 
                             <div id="div_modal" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <input type="hidden" value="'.$this->input->post('getid').'" id="boxid" >
                                            </div>
                                            <div class="modal-body">';

                                             $html.='<div class="row"><div class="col-md-12">
                    
                            <ul class="nav nav-tabs nav-topline">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="base-tab21" data-toggle="tab" aria-controls="tab21" href="#tab21"
                                      aria-expanded="true">Right</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="base-tab22" data-toggle="tab" aria-controls="tab22" href="#tab22"
                                      aria-expanded="false">Left</a>
                                  </li>
                                </ul>

                                 <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">

                                        <div role="tabpanel" class="tab-pane active" id="tab21" aria-expanded="true" aria-labelledby="base-tab21">';
                                         $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6">
                                         <table class="sphryt table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                        if($dataw['eye_type']==2 && $dataw['ref_type']==0 &&  $dataw['action']==1)
                                                        {

                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                     $html.='</tr></tbody></table></div><div class="col-md-6">
                                     <table  class="sphryt table table-bordered" ><tbody><tr>';

                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==2 && $datav['ref_type']==0 &&  $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>';







                                                 $html.='</div>

                                                 <div role="tabpanel" class="tab-pane" id="tab22" aria-expanded="true" aria-labelledby="base-tab22">';


                                                         $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6">
                                         <table class="sphryt table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                        if($dataw['eye_type']==1 && $dataw['ref_type']==0 &&  $dataw['action']==1)
                                                        {

                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                     $html.='</tr></tbody></table></div><div class="col-md-6">
                                     <table  class="sphryt table table-bordered" ><tbody><tr>';

                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==1 && $datav['ref_type']==0 &&  $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>

                                                   
                                                 </div>

                                                 </div></div></div>';
         

                                                $html.='



                                          
                                        </div>
                                        <div class="card-footer ml-auto" id="m_btn_addmedhis">
                                    <button  class="btn btn-primary btn-sm" type="button" ><i class="fas fa-plus-square"></i>Submit</button>
                                    
                                </div>
                                    </div>
                                </div>
                            </form>';
                 echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));

                                               

     }
   }

   public function getrefractiondata()
   {
        $this->form_validation->set_rules('refraction_type', 'Refraction Type', 'trim|required|numeric');
        $this->form_validation->set_rules('ref_type', 'Refraction Type', 'trim|required|numeric');
        $this->form_validation->set_rules('eye_type', 'Refraction Type', 'trim|required|numeric');
        $this->form_validation->set_rules('getid', 'Refraction Type', 'trim|required');
        if($this->form_validation->run() == TRUE)
        {
            $var_array=array($this->input->post('refraction_type'),$this->session->userdata('office_id'));
            $getdata=$this->Common_model->getrefractionmodel($var_array);
            if($getdata)
            {
                if($this->input->post('getid')==1)
                {
                    $na='u';
                    $con1=1;
                    $con2=2;
                }
                elseif($this->input->post('getid')==2)
                {
                    $na='b';
                    $con1=3;
                    $con2=4;
                }
                elseif($this->input->post('getid')==3)
                {
                    $na='c';
                    $con1=0;
                    $con2=0;
                }
                elseif($this->input->post('getid')==4)
                {
                    $na='s';
                    $con1=0;
                    $con2=0;
                }
                elseif($this->input->post('getid')==5)
                {
                    $na='r';
                    $con1=0;
                    $con2=0;
                }
                $html='<form id="edit_form" action="#" method="post"> 
                             <div id="div_modal" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <input type="hidden" value="'.$this->input->post('getid').'" id="boxid" >
                                            </div>
                                            <div class="modal-body">';
                                            if($this->input->post('getid')==1 || $this->input->post('getid')==2)
                                            {
                                            $html.='<div class="row"><div class="col-md-6"><span><u>Right Eye</u></span></div></div><div class="row"><div class="col-md-6"><span><b>'.$na.'cdva</b></span></div><div class="col-md-6"><span><b>'.$na.'cnva</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="'.$na.'cdvarytval"><table class="table table-bordered" id="'.$na.'cdvaryt"><tbody><tr>';
                                            $i=1;
                                            foreach($getdata as $dataw)
                                            {
                                                if($dataw['eye_type']==2 && $dataw['ref_type']==$con1)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        $name=$dataw['name'];
                                                $onc="'".$name."'";
                                                $oncid="'".$this->input->post('getid')."'";
                                            $html.='<td style="cursor:pointer">'.$dataw['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div><div class="col-md-6"><input type="hidden" id="'.$na.'cnvarytval"><table id="'.$na.'cnvaryt" class="table table-bordered" ><tbody><tr>';
                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==2 && $datav['ref_type']==$con2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        $name=$datav['name'];
                                                $onc="'".$name."'";
                                                $oncid="'".$this->input->post('getid')."'";
                                            $html.='<td style="cursor:pointer">'.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>


                                            <div class="row"><div class="col-md-6"><span><u>Left Eye</u></span></div></div><div class="row"><div class="col-md-6"><span><b>'.$na.'cdva</b></span></div><div class="col-md-6"><span><b>'.$na.'cnva</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="'.$na.'cdvalftval"><table id="'.$na.'cdvalft" class="table table-bordered" ><tbody><tr>';
                                            $i=1;
                                            foreach($getdata as $dataq)
                                            {
                                                if($dataq['eye_type']==1 && $dataq['ref_type']==$con1)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        $name=$dataq['name'];
                                                $onc="'".$name."'";
                                                $oncid="'".$this->input->post('getid')."'";
                                            $html.='<td style="cursor:pointer">'.$dataq['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div><div class="col-md-6"><input type="hidden" id="'.$na.'cnvalftval"><table id="'.$na.'cnvalft" class="table table-bordered" ><tbody><tr>';
                                            $i=1;
                                            foreach($getdata as $datavy)
                                            {
                                                if($datavy['eye_type']==1 && $datavy['ref_type']==$con2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        $name=$datavy['name'];
                                                $onc="'".$name."'";
                                                $oncid="'".$this->input->post('getid')."'";
                                            $html.='<td style="cursor:pointer">'.$datavy['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div>';

                                            }
                                             elseif($this->input->post('getid')==3)
                                             {
                                                $html.='<div class="row"><div class="col-md-6"><span><b>PH Right EYE</b></span></div><div class="col-md-6"><span><b>PH Left EYE</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="phprytval"><table class="table table-bordered" id="phpryt"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                        if($dataw['eye_type']==2 && $dataw['ref_type']==$con1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$dataw['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                        $html.='</tr></tbody></table></div><div class="col-md-6"><input type="hidden" id="phplftval"><table id="phplft" class="table table-bordered" ><tbody><tr>';
                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==1 && $datav['ref_type']==$con2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        $name=$datav['name'];
                                                $onc="'".$name."'";
                                                $oncid="'".$this->input->post('getid')."'";
                                            $html.='<td>'.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table>';


                                             }

          elseif($this->input->post('getid')==4)
         {
            $axist=$this->input->post('axis');
            $html.='<div class="row"><div class="col-md-12">
                    
                            <ul class="nav nav-tabs nav-topline">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="base-tab21" data-toggle="tab" aria-controls="tab21" href="#tab21"
                                      aria-expanded="true">Right</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="base-tab22" data-toggle="tab" aria-controls="tab22" href="#tab22"
                                      aria-expanded="false">Left</a>
                                  </li>
                                </ul>

                                 <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">

                                        <div role="tabpanel" class="tab-pane active" id="tab21" aria-expanded="true" aria-labelledby="base-tab21">';

                                         $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="axist" value="'.$axist.'"><input type="hidden" id="sphrytmin"><input type="hidden" id="sphrytplus"><table class="sphryt table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                        if($dataw['eye_type']==2 && $dataw['ref_type']==$con1 &&  $dataw['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="sphryt table table-bordered" ><tbody><tr>';

                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==2 && $datav['ref_type']==$con2 &&  $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>';

                                                 $var_array=array(5,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"><span><b>Cylinder</b></span></div><div class="col-md-6"><span><b>Cylinder</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="cylrytmin"><input type="hidden" id="cylrytplus"><table class="cylryt table table-bordered"><tbody><tr>';
                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==2 && $datawt['ref_type']==$con1 &&  $datawt['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datawt['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="cylryt table table-bordered" ><tbody><tr>';
                                                    $i=1;
                                                    foreach($getdata as $datav)
                                                    {
                                                        if($datav['eye_type']==2 && $datav['ref_type']==$con2 && $datav['action']==2)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                $html.='</tr></tbody></table></div></div>';

                                                $var_array=array(6,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><input type="hidden" id="axisrytmin"><input type="hidden" id="axisrytplus"><span><b>Axis</b><table class="axisryt table table-bordered"><tbody><tr>';

                                                  $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==$con1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div></div>';



                                            
                                          $html.='</div>


                                          <div class="tab-pane" id="tab22" aria-labelledby="base-tab22">';

                                             $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="sphlftmin"><input type="hidden" id="sphlftplus"><table class="sprlft table table-bordered"><tbody><tr>';

                                                     $var_array=array(4,$this->session->userdata('office_id'));
                                                     $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                     $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                       
                                                        if($dataw['eye_type']==1 && $dataw['ref_type']==0 && $dataw['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                    $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="sprlft table table-bordered" ><tbody><tr>';


                                                    $i=1;
                                                    foreach($getdata as $datav)
                                                    {
                                                        if($datav['eye_type']==1 && $datav['ref_type']==$con2 && $datav['action']==2)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                                 
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                $html.='</tr></tbody></table></div></div>';


                                                 $var_array=array(5,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"><span><b>Cylinder</b></span></div><div class="col-md-6"><span><b>Cylinder</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="cylftmin"><input type="hidden" id="cylftplus"><table class="cylft table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==$con1 && $datawt['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datawt['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="cylft table table-bordered" ><tbody><tr>';

                                                     $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==1 && $datav['ref_type']==$con2 && $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>';

                                                 $var_array=array(6,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='
                                                <div class="row"><div class="col-md-6"><span><b></b></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><b>Axis</b>
                                                   <input type="hidden" id="laxisll">
                                                   <table class="axislft table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==$con1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                     $html.='</tr></tbody></table></div></div>';



                                                    
                                          $html.='</div>
                                
                     </div>
            </div></div>';
         }



         elseif($this->input->post('getid')==5)
         {
            $axist=$this->input->post('axis');
            $html.='<div class="row"><div class="col-md-12">
                    
                            <ul class="nav nav-tabs nav-topline">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="base-tab21" data-toggle="tab" aria-controls="tab21" href="#tab21"
                                      aria-expanded="true">Right</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="base-tab22" data-toggle="tab" aria-controls="tab22" href="#tab22"
                                      aria-expanded="false">Left</a>
                                  </li>
                                </ul>

                                 <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">

                                        <div role="tabpanel" class="tab-pane active" id="tab21" aria-expanded="true" aria-labelledby="base-tab21">';

                                         $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="axist" value="'.$axist.'"><input type="hidden" id="sphrytmin"><input type="hidden" id="sphrytplus"><table class="sphryt table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    $con1=5;
                                                    foreach($getdata as $dataw)
                                                    {
                                                        if($dataw['eye_type']==2 && $dataw['ref_type']==$con1 &&  $dataw['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="sphryt table table-bordered" ><tbody><tr>';

                                            $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==2 && $datav['ref_type']==$con1 &&  $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>';

                                                 $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $con1=6;
                                                 $html.='<div class="row"><div class="col-md-6"><span><b>Cylinder</b></span></div><div class="col-md-6"><span><b>Cylinder</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="cylrytmin"><input type="hidden" id="cylrytplus"><table class="cylryt table table-bordered"><tbody><tr>';
                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==2 && $datawt['ref_type']==$con1 &&  $datawt['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datawt['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                        $html.='<td>'.$min.''.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="cylryt table table-bordered" ><tbody><tr>';
                                                    $i=1;
                                                    foreach($getdata as $datav)
                                                    {
                                                        if($datav['eye_type']==2 && $datav['ref_type']==$con1 && $datav['action']==2)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                $html.='</tr></tbody></table></div></div>';
                                                $con1=7;
                                                $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><input type="hidden" id="axisrytmin"><input type="hidden" id="axisrytplus"><span><b>Axis</b><table class="axisryt table table-bordered"><tbody><tr>';

                                                  $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==$con1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div></div>';

                                                $con1=8;
                                                $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><input type="hidden" id="varytmin"><input type="hidden" id="varytplus"><span><b>V/A</b><table class="varyt table table-bordered"><tbody><tr>';

                                                  $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==$con1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div></div>';



                                            
                                          $html.='</div>


                                          <div class="tab-pane" id="tab22" aria-labelledby="base-tab22">';

                                             $html.='<div class="row"><div class="col-md-6"><span><b>Sphere</b></span></div><div class="col-md-6"><span><b>Sphere</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="sphlftmin"><input type="hidden" id="sphlftplus"><table class="sprlft table table-bordered"><tbody><tr>';

                                                     $var_array=array(7,$this->session->userdata('office_id'));
                                                     $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                     $i=1;
                                                    foreach($getdata as $dataw)
                                                    {
                                                       
                                                        if($dataw['eye_type']==1 && $dataw['ref_type']==5 && $dataw['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($dataw['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$dataw['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                    $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="sprlft table table-bordered" ><tbody><tr>';


                                                    $i=1;
                                                    foreach($getdata as $datav)
                                                    {
                                                        if($datav['eye_type']==1 && $datav['ref_type']==5 && $datav['action']==2)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                                 
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                $html.='</tr></tbody></table></div></div>';


                                                 $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='<div class="row"><div class="col-md-6"><span><b>Cylinder</b></span></div><div class="col-md-6"><span><b>Cylinder</b></span></div></div><div class="row"><div class="col-md-6"><input type="hidden" id="cylftmin"><input type="hidden" id="cylftplus"><table class="cylft table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==6 && $datawt['action']==1)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                if($datawt['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }

                                                     $html.='</tr></tbody></table></div><div class="col-md-6"><table  class="cylft table table-bordered" ><tbody><tr>';

                                                     $i=1;
                                            foreach($getdata as $datav)
                                            {
                                                if($datav['eye_type']==1 && $datav['ref_type']==6 && $datav['action']==2)
                                                {
                                                    $k=0;
                                                    $quantity=1;
                                                    while ($quantity>$k)
                                                    {
                                                        if($datav['action']==1)
                                                                {
                                                                    $min='-';
                                                                }
                                                                else
                                                                {
                                                                    $min='+';
                                                                }
                                                               
                                                                $html.='<td>'.$min.''.$datav['name'].'</td>';
                                                        if($i%5==0)
                                                        {
                                                           $html.='</tr><tr>';
                                                        }
                                                        $i++;
                                                        $k++;
                                                    }  
                                                } 
                                            }
                                                $html.='</tr></tbody></table></div></div>';

                                                 $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='
                                                <div class="row"><div class="col-md-6"><span><b></b></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><b>Axis</b>
                                                   <input type="hidden" id="laxisll">
                                                   <table class="axislft table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==7)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                     $html.='</tr></tbody></table></div></div>';

                                                       $var_array=array(7,$this->session->userdata('office_id'));
                                                 $getdata=$this->Common_model->getrefractionmodel($var_array);
                                                 $html.='
                                                <div class="row"><div class="col-md-6"><span><b></b></span></div><div class="col-md-6"><span></span></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><b>V/A</b>
                                                   <input type="hidden" id="vall">
                                                   <table class="valft table table-bordered"><tbody><tr>';

                                                    $i=1;
                                                    foreach($getdata as $datawt)
                                                    {
                                                        if($datawt['eye_type']==1 && $datawt['ref_type']==8)
                                                        {
                                                            $k=0;
                                                            $quantity=1;
                                                            while ($quantity>$k)
                                                            {
                                                                $name=$datawt['name'];
                                                        $onc="'".$name."'";
                                                        $oncid="'".$this->input->post('getid')."'";
                                                    $html.='<td>'.$datawt['name'].'</td>';
                                                                if($i%5==0)
                                                                {
                                                                   $html.='</tr><tr>';
                                                                }
                                                                $i++;
                                                                $k++;
                                                            }  
                                                        } 
                                                    }
                                                     $html.='</tr></tbody></table></div></div>';



                                                    
                                          $html.='</div>
                                
                     </div>
            </div></div>';
         }

                                                $html.='



                                          
                                        </div>
                                        <div class="card-footer ml-auto" id="m_btn_addmedhis">
                                    <button  class="btn btn-primary btn-sm" type="button" onclick="'.$na.'refractionvision()"><i class="fas fa-plus-square"></i>Submit</button>
                                    
                                </div>
                                    </div>
                                </div>
                            </form>';
                 echo json_encode(array('msg'=>$html,'error' =>'','error_message' =>''));
            }
            else
            {
                echo json_encode(array('msg'=>'','error' =>'No data Found','error_message' =>''));
            }
        }
        else
        {
            echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
        }
    
   }

   public function deletedata()
   {
      $this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
       if($this->form_validation->run() == TRUE)
       {
         $delete_id=trim(htmlentities($this->input->post('getid')));
         $var_array=array($delete_id,$this->session->userdata('office_id'));
        
            $getresult=$this->Examination_model->deletedata($delete_id);
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

    public function examinationprint()
    {
       
        $this->Examination_model->print_bill($this->input->post('examinationid'),$this->input->post('chkcomplaintsout'),$this->input->post('chkopthalmicsout'),$this->input->post('chkmedicalout'),$this->input->post('chkeyepartout'),$this->input->post('addmedicinessout'),$this->input->post('investigationchkout'),$this->input->post('preliminary_exout'),$this->input->post('vsisonreadingsout'),$this->input->post('curspecout'),$this->input->post('objectchkout'),$this->input->post('arkkchkout'),$this->input->post('manchkout'),$this->input->post('specchkout'),$this->input->post('conlchkout'),$this->input->post('pmtchkout'),$this->session->userdata('office_id'));
    }

    public function printcertificated()
    {
        $this->Examination_model->printcertificate($this->input->post('examin_id'),$this->session->userdata('office_id'));
    }
    public function getexaminationpreview()
    {
       $this->form_validation->set_rules('examinationid', 'Examination ID', 'trim|required|min_length[1]|max_length[100]|numeric');
       if($this->form_validation->run() == TRUE)
       {
          $examinationid=$this->input->post('examinationid');
          $office_id=$this->session->userdata('office_id');
          $chkcomplaintsout=true;$chkopthalmicsout=true;$chkmedicalout=true;$chkeyepartout=true;$addmedicinessout=true;$investigationchkout=true;$preliminary_exout=true;$vsisonreadingsout=true;$curspecout=true;$objectchkout=true;$arkkchkout=true;$manchkout=true;$specchkout=true;$conlchkout=true;$pmtchkout=true;
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
   $showdata='';

    $complaints=$this->db->query("select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=$examination_masters->examination_id")->result();

     $ophthalmic_history=$this->db->query("select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=$examination_masters->examination_id")->result(); 

     $medical_history=$this->db->query("select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=$examination_masters->examination_id")->result(); 

     $eye_comp=$this->db->query("select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=$examination_masters->examination_id")->result(); 

     $var_array=array($examination_masters->examination_id,$this->session->userdata('office_id'));
     $getdoctorprescription=$this->Examination_model->getdoctormedicinemodels($var_array);

     $var_array=array($examination_masters->examination_id);
     $Getdetailstableex=$this->Examination_model->Getdetailstable($var_array);

     if($complaints){
   $showdata='<div class="row">
                <div class="col-md-5">
                   <h5>Presenting Complaint</h5>';
   $showdata.='</div>
                <div class="col-md-7">';
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
                       $showdata.='<span>'.$comp->name.'   '.$lefteye.'  '.$righteye.'</span>'; 
                     } } 
                $showdata.='</div>
               </div>';
                }

                if($ophthalmic_history)
                {
                    $showdata.='<div class="row">
                    <div class="col-md-5">
                       <h5>Ophthalmic History</h5>';
               $showdata.='</div>
                            <div class="col-md-7">';
                                   foreach($ophthalmic_history as $opth){
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
                                     $showdata.='<span>'.$opth->name.'   '.$lefteye.'  '.$righteye.'<br/></span>';
                                 }
                            $showdata.='</div>
                           </div>';
                 }


                 if($medical_history)
                {
                    $showdata.='<div class="row">
                    <div class="col-md-5">
                       <h5>Medical History</h5>';
               $showdata.='</div>
                            <div class="col-md-7">';
                                foreach($medical_history as $medi)
                                {
                                 $showdata.='<span>'.$medi->name.'<br/></span>';  
                                }
                            $showdata.='</div>
                           </div>';
                 }

                 if($eye_comp)
                {
                    $showdata.='<div class="row">
                    <div class="col-md-5">
                       <h5>Eye Details</h5>';
               $showdata.='</div>
                            <div class="col-md-7">
                                <table class="table table-bordered table-hover" style="width:100%;">
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
                            </div>
                           </div>';
                 }


                  if($getdoctorprescription)
                   {
                    $showdata.='<div class="row">
                    <div class="col-md-5">
                       <h5>Medicine Details:</h5>';
               $showdata.='</div>
                            <div class="col-md-7">
                            <table  class="table table-bordered table-hover"><thead><tr><th style="width:5%;">SL NO</th style="width:10%;"><th style="width:20%;">Drug Name</th><th style="width:20%;">Instruction</th><th style="width:20%;">No Of Days</th><th style="width:20%;">Qty</th><th style="width:5%;">Eye</th></tr></thead><tbody>';
                                 $sgl=0;
                                 foreach($getdoctorprescription as $datame)
                                 {
                                    $sgl++;
                                    $showdata.='<tr><td>'.$sgl.'</td><td>'.$datame['drugname'].'</td><td>'.$datame['instruction'].'</td><td>'.$datame['nodays'].'</td><td>'.$datame['qty'].'</td><td>'.$datame['med_eye'].'</td></tr>';
                                 }
                                  $showdata.='</tbody></table>
                            </div>
                           </div>';
                    }


                    if($Getdetailstableex)
                   {
                    $showdata.='<div class="row">
                            <div class="col-md-5">
                               <h5>Investigation Details:</h5>';
                       $showdata.='</div>
                                    <div class="col-md-7">
                                   <table  class="table table-bordered table-hover"><thead><tr><th>Particulars</th><th>Rate</th></tr></thead><tbody>';
                              $sl=1;
                         foreach($Getdetailstableex as $datai)
                         {
                                $getparticularname=$this->Common_model->getparticularsmodel($datai['charge_id'],$datai['particulars_id'],$this->session->userdata('office_id'));

                                 $showdata.='<tr>
                                      <td>'.$getparticularname[0]['name'].'</td>
                                      <td>'.$datai['rate'].'</td>
                                 </tr>';
                                 $sl++;

                         }
                              $showdata.='</tbody></table>
                                    </div>
                                   </div>';
                    }
                  
                  $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Preliminary  Examination:</h5>
                                </div>
                                <div class="col-md-7">
                                    <table  class="table table-bordered table-hover">
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
                                </div>
                               </div>';


                    $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Vision Readings:</h5>
                                </div>
                                <div class="col-md-7">
                                     <table  class="table table-bordered table-hover">
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
                                </div>
                               </div>';



                               $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Current Spectacle Prescription:</h5>
                                </div>
                                <div class="col-md-7">
                                      <table class="table table-bordered table-hover">
                                        <tbody><tr>
                                            <th align="center" class="tab_tit">RE</th>
                                            <th align="center" class="tab_tit">LE</th>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px;">
                                                <table class="table table-bordered table-hover">
                                                    <tbody><tr>
                                                        <td>
                                                        </td><td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">D.V</td>
                                                        <td  align="center">'.$examination_masters->cur1.'</td>
                                                        <td  align="center">'.$examination_masters->cur2.'</td>
                                                        <td  align="center">'.$examination_masters->cur3.'</td>
                                                        <td  align="center">'.$examination_masters->cur4.'</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit">N.V</td>
                                                        <td  align="center">'.$examination_masters->cur5.'</td>
                                                        <td  align="center">'.$examination_masters->cur6.'</td>
                                                        <td align="center">'.$examination_masters->cur7.'</td>
                                                        <td  align="center">'.$examination_masters->cur8.'</td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                            <td style="padding: 0px;">
                                                    <table class="table table-bordered table-hover">
                                                        <tbody><tr>
                                                            <td class="tab_tit">SPH</td>
                                                            <td class="tab_tit">CYL</td>
                                                            <td class="tab_tit">AXIS</td>
                                                            <td class="tab_tit">V/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">'.$examination_masters->cur9.' .</td>
                                                            <td  align="center">'.$examination_masters->cur10.'</td>
                                                            <td  align="center">'.$examination_masters->cur11.'</td>
                                                            <td  align="center">'.$examination_masters->cur12.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td  align="center">'.$examination_masters->cur13.' .</td>
                                                            <td  align="center">'.$examination_masters->cur14.'</td>
                                                            <td  align="center">'.$examination_masters->cur15.'</td>
                                                            <td  align="center">'.$examination_masters->cur16.'</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                             </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                               </div>';


                    $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Objective Refraction:</h5>
                                </div>
                                <div class="col-md-7">
                                     <table  class="table table-bordered table-hover">
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
                                                            <td></td>
                                                            <td></td>
                                                          </tr>
                                                      </tbody></table>
                                </div>
                               </div>';


                                $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>AR Kerotometry:</h5>
                                </div>
                                <div class="col-md-7">
                                      <table  class="table table-bordered table-hover">
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
                                </div>
                               </div>';


                                $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Manual Kerotometry:</h5>
                                </div>
                                <div class="col-md-7">
                                       <table  class="table table-bordered table-hover">
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
                                </div>
                               </div>';



                                 $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Spectacle Correction:</h5>
                                </div>
                                <div class="col-md-7">
                                       <table class="table table-bordered table-hover">
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
                                </div>
                               </div>';



                                 $showdata.='<div class="row">
                                    <div class="col-md-5">
                                      <h5>Contact Lens Correction:</h5>
                                </div>
                                <div class="col-md-7">
                                        <table class="table table-bordered table-hover">
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
                                </div>
                               </div>';


                        
                    

   

             echo json_encode(array('msg'=>'data','showdata'=>$showdata,'error'=>'','error_message' =>''));
            
       }
       else
       {
         echo json_encode(array('msg'=>'','error'=>'','error_message' => $this->form_validation->error_array()));
       }
    }

 }
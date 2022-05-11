select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021750926971436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021750926971436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021800994873047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021750926971436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017211437225342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005648136138916

SELECT *
FROM `examination`
WHERE `examination_id` = 54 
 Execution Time:0.0007929801940918

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00036478042602539

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00048685073852539

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=54 
 Execution Time:0.0050411224365234

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=54 
 Execution Time:0.0029778480529785

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=54 
 Execution Time:0.0023081302642822

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=54 
 Execution Time:0.0022728443145752

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='54' and office_id='1' 
 Execution Time:0.0026378631591797

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0017189979553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021231174468994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021231174468994

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021231174468994

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0001978874206543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00026607513427734

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0034658908843994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0040340423583984

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0039479732513428

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.034569978713989

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.034569978713989

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021638870239258

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041413307189941

SELECT *
FROM `examination`
WHERE `examination_id` = 54 
 Execution Time:0.00075984001159668

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00017309188842773

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0001678466796875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0001530647277832

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00011396408081055

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=54 
 Execution Time:0.00050592422485352

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=54 
 Execution Time:0.00028491020202637

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=54 
 Execution Time:0.00026392936706543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=54 
 Execution Time:0.00045919418334961

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='54' and office_id='1' 
 Execution Time:0.00025606155395508

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00029301643371582

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00081396102905273

SELECT *
FROM `examination`
WHERE `examination_id` = 54 
 Execution Time:0.00073909759521484

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00027990341186523

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042414665222168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00025582313537598

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00020098686218262

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=54 
 Execution Time:0.00076508522033691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=54 
 Execution Time:0.00048613548278809

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=54 
 Execution Time:0.00040602684020996

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=54 
 Execution Time:0.00045084953308105

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='54' and office_id='1' 
 Execution Time:0.00053882598876953

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00036716461181641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 62 
 Execution Time:0.00032806396484375

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 58 
 Execution Time:0.00062394142150879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080704689025879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080704689025879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select * from examination where examination_id= '59' and   office_id= '1' 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 59 
 Execution Time:0.00023007392883301

select * from examination_chargesdetails where  examination_id= '59' 
 Execution Time:0.00023984909057617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014338493347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014338493347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010528564453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014338493347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093412399291992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093412399291992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026416778564453

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026416778564453

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063586235046387

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026416778564453

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063586235046387

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034379959106445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034379959106445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019059181213379

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025389194488525

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025389194488525

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039529800415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017940998077393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017940998077393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018720626831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021530151367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00913405418396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021309852600098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017940998077393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018720626831055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078039169311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078039169311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078039169311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078039169311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077428817749023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077559947967529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078039169311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016658306121826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051569938659668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016229152679443

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031797885894775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00080299377441406

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00080299377441406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011231899261475

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00080299377441406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011231899261475

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 64 
 Execution Time:0.00054001808166504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014140605926514

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001054048538208

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001054048538208

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 63 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 67 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 63 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 67 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 65 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 69 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 65 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 69 
 Execution Time:0.00023484230041504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090909004211426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 65 
 Execution Time:0.00058794021606445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 69 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021238327026367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 65 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 69 
 Execution Time:0.00026082992553711

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 65 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select * from examination where examination_id= '64' and   office_id= '1' 
 Execution Time:0.00095891952514648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 64 
 Execution Time:0.0012431144714355

select * from examination_chargesdetails where  examination_id= '64' 
 Execution Time:0.00094795227050781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001554012298584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001554012298584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029580593109131

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00055098533630371

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00019311904907227

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030510425567627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030510425567627

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029182434082031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 64 
 Execution Time:0.00037384033203125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00050997734069824

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 64 
 Execution Time:0.0005650520324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select * from examination where examination_id= '62' and   office_id= '1' 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 62 
 Execution Time:0.00057601928710938

select * from examination_chargesdetails where  examination_id= '62' 
 Execution Time:0.0003058910369873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062298774719238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062298774719238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063681602478027

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093317031860352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012590885162354

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012590885162354

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029397010803223

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0001978874206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026392936706543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042009353637695

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 67 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 71 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 67 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 71 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009768009185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001035213470459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001035213470459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001035213470459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 63 
 Execution Time:0.00038003921508789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 67 
 Execution Time:0.00028491020202637

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 63 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from examination where examination_id= '63' and   office_id= '1' 
 Execution Time:0.0013558864593506

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 63 
 Execution Time:0.00067305564880371

select * from examination_chargesdetails where  examination_id= '63' 
 Execution Time:0.00060200691223145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010161399841309

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010161399841309

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069093704223633

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016138553619385

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00023818016052246

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00019121170043945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0013930797576904

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088691711425781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00070881843566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 69 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 73 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039598941802979

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 69 
 Execution Time:0.00028491020202637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 73 
 Execution Time:0.00019097328186035

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 69 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from examination where examination_id= '67' and   office_id= '1' 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 67 
 Execution Time:0.00063204765319824

select * from examination_chargesdetails where  examination_id= '67' 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046920776367188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00039792060852051

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 66 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from examination where examination_id= '68' and   office_id= '1' 
 Execution Time:0.001086950302124

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 68 
 Execution Time:0.00049304962158203

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00045013427734375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0069670677185059

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0069670677185059

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0077400207519531

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0077400207519531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0077400207519531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.00072002410888672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 74 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027570724487305

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 67 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 71 
 Execution Time:0.00030398368835449

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 67 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from examination where examination_id= '65' and   office_id= '1' 
 Execution Time:0.00095796585083008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 65 
 Execution Time:0.00056195259094238

select * from examination_chargesdetails where  examination_id= '65' 
 Execution Time:0.00043702125549316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0055878162384033

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012052059173584

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084304809570312

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='56' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093293190002441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00031089782714844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00023388862609863

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 66 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select * from examination where examination_id= '68' and   office_id= '1' 
 Execution Time:0.0010359287261963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 68 
 Execution Time:0.0003509521484375

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00026392936706543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045680999755859

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00041079521179199

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 66 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016570091247559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016570091247559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014569759368896

select * from examination where examination_id= '68' and   office_id= '1' 
 Execution Time:0.00082111358642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 68 
 Execution Time:0.00020790100097656

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00017881393432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 67 
 Execution Time:0.00059890747070312

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 71 
 Execution Time:0.0002439022064209

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 67 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select * from examination where examination_id= '65' and   office_id= '1' 
 Execution Time:0.0011618137359619

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 65 
 Execution Time:0.00031089782714844

select * from examination_chargesdetails where  examination_id= '65' 
 Execution Time:0.0007469654083252

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094199180603027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094199180603027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 69 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 73 
 Execution Time:0.00060296058654785

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 69 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from examination where examination_id= '67' and   office_id= '1' 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 67 
 Execution Time:0.0002291202545166

select * from examination_chargesdetails where  examination_id= '67' 
 Execution Time:0.00029206275939941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053596496582031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053596496582031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050210952758789

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064802169799805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 74 
 Execution Time:0.00021791458129883

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 70 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.00019407272338867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 74 
 Execution Time:0.00028204917907715

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 70 
 Execution Time:0.00043821334838867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select * from examination where examination_id= '69' and   office_id= '1' 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 69 
 Execution Time:0.00036716461181641

select * from examination_chargesdetails where  examination_id= '69' 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007939338684082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088596343994141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088596343994141

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034618377685547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002230167388916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034618377685547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012178421020508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014729499816895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014729499816895

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016109943389893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016109943389893

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013918876647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013918876647949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010638236999512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013918876647949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043702125549316

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006859302520752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015988349914551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015988349914551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015988349914551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00059795379638672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 75 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013420581817627

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051300525665283

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.008368968963623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051300525665283

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.008368968963623

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0044679641723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051300525665283

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.008368968963623

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0044679641723633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.0040948390960693

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 75 
 Execution Time:0.0024149417877197

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 71 
 Execution Time:0.002284049987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045769214630127

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045769214630127

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032567977905273

select * from examination where examination_id= '70' and   office_id= '1' 
 Execution Time:0.012511014938354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 70 
 Execution Time:0.0035629272460938

select * from examination_chargesdetails where  examination_id= '70' 
 Execution Time:0.001370906829834

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062108039855957

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029170513153076

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078582763671875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 76 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 76 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 75 
 Execution Time:0.0002589225769043

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 71 
 Execution Time:0.00062704086303711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010139942169189

select * from examination where examination_id= '70' and   office_id= '1' 
 Execution Time:0.00075912475585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 70 
 Execution Time:0.00016117095947266

select * from examination_chargesdetails where  examination_id= '70' 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079703330993652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079703330993652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00039005279541016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 76 
 Execution Time:0.00030779838562012

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 72 
 Execution Time:0.00062012672424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033590793609619

select * from examination where examination_id= '71' and   office_id= '1' 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 71 
 Execution Time:0.00036191940307617

select * from examination_chargesdetails where  examination_id= '71' 
 Execution Time:0.00035309791564941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050711631774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 76 
 Execution Time:0.00027298927307129

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 72 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018980503082275

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018980503082275

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select * from examination where examination_id= '71' and   office_id= '1' 
 Execution Time:0.00064182281494141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 71 
 Execution Time:0.00029110908508301

select * from examination_chargesdetails where  examination_id= '71' 
 Execution Time:0.00026082992553711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00095176696777344

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075507164001465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 77 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038671493530273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013191699981689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 77 
 Execution Time:0.00025510787963867

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 73 
 Execution Time:0.0008091926574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010659694671631

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010659694671631

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select * from examination where examination_id= '72' and   office_id= '1' 
 Execution Time:0.0012938976287842

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 72 
 Execution Time:0.00070405006408691

select * from examination_chargesdetails where  examination_id= '72' 
 Execution Time:0.00046682357788086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025999546051025

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088405609130859

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010180473327637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001582145690918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001582145690918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018160343170166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00071907043457031

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00071907043457031

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033130645751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 78 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079011917114258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00029516220092773

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00026488304138184

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00076889991760254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 76 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 80 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 76 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 80 
 Execution Time:0.00047993659973145

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 76 
 Execution Time:0.00074505805969238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select * from examination where examination_id= '74' and   office_id= '1' 
 Execution Time:0.0011148452758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001166820526123

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 74 
 Execution Time:0.0007779598236084

select * from examination_chargesdetails where  examination_id= '74' 
 Execution Time:0.00071310997009277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029489994049072

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038409233093262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038409233093262

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 78 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 78 
 Execution Time:0.00029993057250977

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 74 
 Execution Time:0.00084614753723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from examination where examination_id= '75' and   office_id= '1' 
 Execution Time:0.00065088272094727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 75 
 Execution Time:0.0012109279632568

select * from examination_chargesdetails where  examination_id= '75' 
 Execution Time:0.00022697448730469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062084197998047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062084197998047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011360645294189

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011360645294189

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080609321594238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080609321594238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058948993682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058948993682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042481422424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058948993682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042481422424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033268928527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058948993682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042481422424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033268928527832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010560035705566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058948993682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042481422424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033268928527832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 77 
 Execution Time:0.00036811828613281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010459423065186

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021219253540039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013971328735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013971328735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013971328735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00033807754516602

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00071597099304199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017580986022949

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015850067138672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015850067138672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.0012099742889404

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.0012960433959961

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00097417831420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00032901763916016

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00084114074707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.0010700225830078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00027012825012207

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00052189826965332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00056600570678711

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00083088874816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00051188468933105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00019097328186035

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.0001680850982666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024080276489258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00025296211242676

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00040292739868164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00042605400085449

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0010390281677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00070095062255859

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00093793869018555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00044584274291992

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.0019059181213379

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053949356079102

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053949356079102

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019919872283936

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00025510787963867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00029206275939941

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00068521499633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00063395500183105

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00022077560424805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030684471130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00016593933105469

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00020599365234375

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00036978721618652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00021100044250488

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00072407722473145

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00034117698669434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083112716674805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00032305717468262

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00019502639770508

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00018215179443359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00038886070251465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00037503242492676

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00072884559631348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015058517456055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015058517456055

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.010088920593262

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.0025911331176758

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00017809867858887

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00016093254089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00023484230041504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00015497207641602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00080108642578125

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00025105476379395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050878524780273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050878524780273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00032782554626465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00021886825561523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00098896026611328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00014495849609375

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00012016296386719

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00045895576477051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00038790702819824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.0005490779876709

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086712837219238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086712837219238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077915191650391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00031518936157227

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0007779598236084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00019288063049316

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00032782554626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031185150146484

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.00091695785522461

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00051093101501465

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00034284591674805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00046896934509277

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00036883354187012

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00042486190795898

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00035190582275391

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00026321411132812

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00048208236694336

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.00035905838012695

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00036215782165527

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.00078821182250977

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00036883354187012

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00026297569274902

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00031900405883789

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00023698806762695

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00018310546875

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00023603439331055

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.00028204917907715

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00017404556274414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0004889965057373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.0003058910369873

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00054788589477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00065088272094727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00014305114746094

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00011515617370605

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.0006260871887207

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00056099891662598

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0001978874206543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00028705596923828

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00018787384033203

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00015902519226074

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00045585632324219

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.0003972053527832

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00018000602722168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020828247070312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020828247070312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020828247070312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0009458065032959

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00039505958557129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.0010249614715576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00063514709472656

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040197372436523

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.00065398216247559

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029492378234863

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00018215179443359

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0001671314239502

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00014281272888184

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00027704238891602

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00019502639770508

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00016999244689941

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00013184547424316

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.00026702880859375

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00093793869018555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00021791458129883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00017595291137695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037808418273926

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037808418273926

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040609836578369

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00072312355041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00017499923706055

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00011396408081055

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.0010747909545898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00059604644775391

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00047183036804199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00039100646972656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00063514709472656

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00053501129150391

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00046110153198242

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00045394897460938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.0004270076751709

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.0002601146697998

SELECT *
FROM `examination`
WHERE `examination_id` = 66 
 Execution Time:0.00060701370239258

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00052213668823242

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00044584274291992

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00030612945556641

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=66 
 Execution Time:0.00055885314941406

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=66 
 Execution Time:0.00048303604125977

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=66 
 Execution Time:0.00060701370239258

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=66 
 Execution Time:0.00016403198242188

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='66' and office_id='1' 
 Execution Time:0.000701904296875

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00011205673217773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00073599815368652

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00037002563476562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00085306167602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00090384483337402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.00041818618774414

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00037503242492676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00051307678222656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016021728515625

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00063014030456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.0002131462097168

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001723051071167

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001723051071167

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001723051071167

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00021481513977051

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.000885009765625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00024890899658203

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00026202201843262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087714195251465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087714195251465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0093300342559814

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087714195251465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0093300342559814

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.0012989044189453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.0010709762573242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.0016260147094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.0009920597076416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.0010850429534912

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00046110153198242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00020909309387207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.00087904930114746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00059604644775391

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00037598609924316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.00082802772521973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00022292137145996

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00022006034851074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00096797943115234

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00057697296142578

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031518936157227

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00041413307189941

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00025200843811035

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00063300132751465

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00048995018005371

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00044894218444824

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00033807754516602

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00049996376037598

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.0002439022064209

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.0012390613555908

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00064206123352051

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00036716461181641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00023818016052246

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00046801567077637

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00037407875061035

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00038599967956543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00026512145996094

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00038313865661621

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00016117095947266

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00061511993408203

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00026106834411621

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00046586990356445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.0001978874206543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00047802925109863

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00069499015808105

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00040292739868164

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.001162052154541

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00044989585876465

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00025320053100586

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00034117698669434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00040483474731445

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00071287155151367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075101852416992

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.00089311599731445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00044512748718262

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00032901763916016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009458065032959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009458065032959

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00049591064453125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00025582313537598

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00017189979553223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00015902519226074

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00011682510375977

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00026297569274902

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00020289421081543

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00020480155944824

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00013303756713867

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00024199485778809

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00010108947753906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040640830993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040640830993652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040640830993652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.0015299320220947

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00082707405090332

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.0028641223907471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029640197753906

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.000823974609375

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00032401084899902

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00030112266540527

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00045013427734375

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00032186508178711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00031304359436035

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0002138614654541

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0003809928894043

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00016403198242188

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.001162052154541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00046086311340332

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00038695335388184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037529468536377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037529468536377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.003633975982666

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00054383277893066

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022792816162109

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016593933105469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00015592575073242

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00029206275939941

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00020003318786621

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00023698806762695

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0001671314239502

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00028300285339355

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00013399124145508

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.0011210441589355

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0005800724029541

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0010309219360352

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.0012400150299072

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00060009956359863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00056099891662598

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00056815147399902

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0013041496276855

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00034689903259277

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.0025210380554199

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00063920021057129

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00044107437133789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00035810470581055

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00076913833618164

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00061988830566406

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00052189826965332

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00072693824768066

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00046110153198242

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00034093856811523

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00057888031005859

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00036716461181641

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0012960433959961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00025010108947754

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00042891502380371

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.0002288818359375

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00019001960754395

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00033092498779297

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00016689300537109

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00074100494384766

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00035810470581055

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00021719932556152

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00023317337036133

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00015497207641602

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00032520294189453

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00021910667419434

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00023484230041504

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0001678466796875

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00029802322387695

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00013494491577148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.0003349781036377

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076103210449219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076103210449219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027470588684082

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.0011231899261475

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00022602081298828

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00043392181396484

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00054407119750977

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00028610229492188

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00016403198242188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00045299530029297

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00026702880859375

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.0002601146697998

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00017094612121582

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00040483474731445

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00015497207641602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00037002563476562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.0053369998931885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.0042901039123535

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00056886672973633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00060892105102539

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00058412551879883

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00028800964355469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00034594535827637

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.0002288818359375

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00021910667419434

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00031089782714844

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00030708312988281

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00038003921508789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 79 
 Execution Time:0.00035905838012695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 75 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001194953918457

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075078010559082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075078010559082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select * from examination where examination_id= '73' and   office_id= '1' 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 73 
 Execution Time:0.00013303756713867

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00010395050048828

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00059604644775391

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022196769714355

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00017786026000977

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00020909309387207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00072407722473145

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00055694580078125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00045394897460938

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0004420280456543

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00075101852416992

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.0002138614654541

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.0012249946594238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00076818466186523

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00089907646179199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00091910362243652

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0013370513916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00062203407287598

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00097799301147461

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00032496452331543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00054788589477539

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0046830177307129

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.0009160041809082

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00079798698425293

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00031304359436035

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0016310214996338

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00029492378234863

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00020980834960938

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00019311904907227

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0026450157165527

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0011031627655029

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00025510787963867

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00064206123352051

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022697448730469

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.0001671314239502

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0001518726348877

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00030279159545898

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00021910667419434

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00020194053649902

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00015783309936523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0002901554107666

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00010514259338379

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00067400932312012

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00057506561279297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00030112266540527

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00056600570678711

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00050997734069824

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.0004279613494873

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00017595291137695

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00063920021057129

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00014495849609375

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00070095062255859

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00028109550476074

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00052309036254883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00026607513427734

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00023794174194336

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00057291984558105

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00036883354187012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00034999847412109

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00027585029602051

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0003359317779541

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00018095970153809

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00056695938110352

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0002129077911377

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00013279914855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00015401840209961

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00011587142944336

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00032210350036621

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00018095970153809

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00017285346984863

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00012898445129395

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00025510787963867

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00065708160400391

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0006861686706543

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00053215026855469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00025701522827148

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00052785873413086

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.0003361701965332

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00032591819763184

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00017189979553223

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.0003960132598877

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00014996528625488

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.0007479190826416

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00037503242492676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00046205520629883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00034403800964355

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00041913986206055

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00027894973754883

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00025606155395508

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00064682960510254

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00032711029052734

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00024509429931641

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00095701217651367

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00046086311340332

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00045895576477051

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00025796890258789

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00055313110351562

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00036811828613281

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00029301643371582

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00024509429931641

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00038981437683105

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00015020370483398

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00086498260498047

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0003201961517334

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00018501281738281

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00050091743469238

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.0003058910369873

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.0002739429473877

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00023198127746582

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00038480758666992

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00016689300537109

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00061607360839844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00025391578674316

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00014400482177734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00018000602722168

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00014591217041016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00027894973754883

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00018787384033203

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00019001960754395

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00016283988952637

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00028109550476074

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00011777877807617

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00084614753723145

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00034904479980469

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031781196594238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00021004676818848

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00050187110900879

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00031900405883789

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00032496452331543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.0002448558807373

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00040698051452637

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00018811225891113

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00069284439086914

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00034999847412109

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00017809867858887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.0001828670501709

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00014805793762207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.00036001205444336

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00029706954956055

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00021195411682129

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00020694732666016

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00030207633972168

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00016188621520996

SELECT *
FROM `examination`
WHERE `examination_id` = 73 
 Execution Time:0.00058484077453613

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00024294853210449

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0001380443572998

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=73 
 Execution Time:0.0002901554107666

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=73 
 Execution Time:0.00056099891662598

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=73 
 Execution Time:0.00022101402282715

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=73 
 Execution Time:0.00028395652770996

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='73' and office_id='1' 
 Execution Time:0.00029301643371582

select * from examination_chargesdetails where  examination_id= '73' 
 Execution Time:0.00028419494628906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 76 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 80 
 Execution Time:0.00026702880859375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 76 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select * from examination where examination_id= '74' and   office_id= '1' 
 Execution Time:0.001068115234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 74 
 Execution Time:0.00026202201843262

select * from examination_chargesdetails where  examination_id= '74' 
 Execution Time:0.00031805038452148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

SELECT *
FROM `examination`
WHERE `examination_id` = 74 
 Execution Time:0.0018720626831055

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00033307075500488

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 76 
 Execution Time:0.0002291202545166

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00020813941955566

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=74 
 Execution Time:0.00049400329589844

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=74 
 Execution Time:0.00079202651977539

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=74 
 Execution Time:0.00028896331787109

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=74 
 Execution Time:0.00021100044250488

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='74' and office_id='1' 
 Execution Time:0.00036215782165527

select * from examination_chargesdetails where  examination_id= '74' 
 Execution Time:0.00016188621520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 77 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.00023198127746582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 77 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select * from examination where examination_id= '76' and   office_id= '1' 
 Execution Time:0.00080108642578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 76 
 Execution Time:0.000244140625

select * from examination_chargesdetails where  examination_id= '76' 
 Execution Time:0.00017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028681755065918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `examination`
WHERE `examination_id` = 76 
 Execution Time:0.0007171630859375

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00032997131347656

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 77 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00033378601074219

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=76 
 Execution Time:0.00067496299743652

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=76 
 Execution Time:0.00040793418884277

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=76 
 Execution Time:0.0005648136138916

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=76 
 Execution Time:0.00027799606323242

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='76' and office_id='1' 
 Execution Time:0.00039792060852051

select * from examination_chargesdetails where  examination_id= '76' 
 Execution Time:0.00023388862609863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 75 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 71 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058913230895996

select * from examination where examination_id= '70' and   office_id= '1' 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 70 
 Execution Time:0.00011897087097168

select * from examination_chargesdetails where  examination_id= '70' 
 Execution Time:0.00010800361633301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021460056304932

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021460056304932

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `examination`
WHERE `examination_id` = 70 
 Execution Time:0.00061702728271484

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022983551025391

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00020599365234375

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00038409233093262

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=70 
 Execution Time:0.00064182281494141

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=70 
 Execution Time:0.00050497055053711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=70 
 Execution Time:0.00051403045654297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=70 
 Execution Time:0.00050592422485352

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='70' and office_id='1' 
 Execution Time:0.00072813034057617

select * from examination_chargesdetails where  examination_id= '70' 
 Execution Time:0.00019001960754395

SELECT *
FROM `examination`
WHERE `examination_id` = 70 
 Execution Time:0.0006401538848877

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00029206275939941

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.0002892017364502

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00025796890258789

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=70 
 Execution Time:0.00041604042053223

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=70 
 Execution Time:0.00031280517578125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=70 
 Execution Time:0.00024890899658203

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=70 
 Execution Time:0.00020813941955566

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='70' and office_id='1' 
 Execution Time:0.00046396255493164

select * from examination_chargesdetails where  examination_id= '70' 
 Execution Time:0.00016880035400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 36 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 37 
 Execution Time:0.00035500526428223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 36 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select * from examination where examination_id= '33' and   office_id= '1' 
 Execution Time:0.00081801414489746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 33 
 Execution Time:0.0001678466796875

select * from examination_chargesdetails where  examination_id= '33' 
 Execution Time:0.00014591217041016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0065288543701172

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0065288543701172

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030238628387451

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

SELECT *
FROM `examination`
WHERE `examination_id` = 33 
 Execution Time:0.0035459995269775

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0029211044311523

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0026299953460693

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 36 
 Execution Time:0.0022168159484863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.0031838417053223

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=33 
 Execution Time:0.0016748905181885

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=33 
 Execution Time:0.007127046585083

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=33 
 Execution Time:0.00075602531433105

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=33 
 Execution Time:0.00079202651977539

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='33' and office_id='1' 
 Execution Time:0.00078606605529785

select * from examination_chargesdetails where  examination_id= '33' 
 Execution Time:0.0024609565734863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 12 
 Execution Time:0.00028705596923828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 11 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from examination where examination_id= '6' and   office_id= '1' 
 Execution Time:0.0009770393371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 6 
 Execution Time:0.00025320053100586

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.00053191184997559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002741813659668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083112716674805

SELECT *
FROM `examination`
WHERE `examination_id` = 6 
 Execution Time:0.00065398216247559

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00026607513427734

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00037980079650879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00017499923706055

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00024294853210449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=6 
 Execution Time:0.00060296058654785

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=6 
 Execution Time:0.00044703483581543

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=6 
 Execution Time:0.00056600570678711

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=6 
 Execution Time:0.00015401840209961

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='6' and office_id='1' 
 Execution Time:0.00071310997009277

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013711452484131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013711452484131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015819072723389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013711452484131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 18 
 Execution Time:0.00024986267089844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 17 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.00074577331542969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00050497055053711

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00018692016601562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002284049987793

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002284049987793

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.0006721019744873

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00023889541625977

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0001530647277832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00015091896057129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00014591217041016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00030517578125

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00018596649169922

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.00016307830810547

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.0001378059387207

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00028705596923828

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00010108947753906

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00069904327392578

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00050115585327148

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00044417381286621

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00048685073852539

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00030016899108887

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00050115585327148

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00018787384033203

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00013208389282227

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.00028085708618164

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00025391578674316

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.0009009838104248

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00042104721069336

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00033283233642578

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00029182434082031

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00099992752075195

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.0006859302520752

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.0009009838104248

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.0005028247833252

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00059914588928223

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00022602081298828

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00071287155151367

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00021600723266602

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00017285346984863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00018191337585449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0001380443572998

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00025510787963867

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00017309188842773

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00025296211242676

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00014901161193848

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.0003049373626709

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.0001368522644043

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.00081300735473633

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00034594535827637

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00017714500427246

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00047898292541504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00029611587524414

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.0002601146697998

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.00023913383483887

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00037693977355957

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00013089179992676

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00082683563232422

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0003349781036377

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00018715858459473

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00044512748718262

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.0003049373626709

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00026988983154297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00022196769714355

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.00041317939758301

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00015091896057129

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.0005650520324707

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00021219253540039

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016188621520996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00018310546875

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00013089179992676

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00029110908508301

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00020980834960938

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.00018811225891113

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.00013303756713867

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00023794174194336

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00063991546630859

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024700164794922

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00081801414489746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00019097328186035

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00030183792114258

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00030708312988281

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00018501281738281

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00016593933105469

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00023293495178223

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.00032281875610352

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.0001988410949707

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.00049591064453125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022721290588379

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00015711784362793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00017595291137695

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00029301643371582

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00018787384033203

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.0001680850982666

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.00012898445129395

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00027894973754883

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00067281723022461

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00028610229492188

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00022387504577637

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00024795532226562

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00030994415283203

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00031614303588867

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00024509429931641

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00017404556274414

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.0003058910369873

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00014805793762207

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.0007929801940918

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00042605400085449

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00027179718017578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00016403198242188

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00020503997802734

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00028681755065918

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00019097328186035

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.0002591609954834

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.0001530647277832

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00023698806762695

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00076484680175781

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029087066650391

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00019288063049316

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00014519691467285

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.0006711483001709

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00024580955505371

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00023293495178223

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00018310546875

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.00034499168395996

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00011491775512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017578601837158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017578601837158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018150806427002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017578601837158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014710426330566

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039410591125488

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055599212646484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055599212646484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067496299743652

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0004880428314209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00017189979553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022730827331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022730827331543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0003209114074707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.00030207633972168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.0005338191986084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from examination where examination_id= '84' and   office_id= '1' 
 Execution Time:0.00098013877868652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 84 
 Execution Time:0.00029301643371582

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.0030460357666016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020909309387207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `examination`
WHERE `examination_id` = 26 
 Execution Time:0.00066900253295898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.0003659725189209

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00039386749267578

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=26 
 Execution Time:0.000579833984375

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=26 
 Execution Time:0.00081491470336914

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=26 
 Execution Time:0.00052285194396973

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=26 
 Execution Time:0.00031208992004395

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='26' and office_id='1' 
 Execution Time:0.00042986869812012

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00020813941955566

SELECT *
FROM `examination`
WHERE `examination_id` = 35 
 Execution Time:0.00059199333190918

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0010361671447754

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00036811828613281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00027894973754883

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=35 
 Execution Time:0.00049614906311035

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=35 
 Execution Time:0.00041103363037109

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=35 
 Execution Time:0.00039505958557129

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=35 
 Execution Time:0.00043487548828125

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='35' and office_id='1' 
 Execution Time:0.00037908554077148

select * from examination_chargesdetails where  examination_id= '35' 
 Execution Time:0.00022602081298828

SELECT *
FROM `examination`
WHERE `examination_id` = 39 
 Execution Time:0.00074195861816406

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 8 
 Execution Time:0.00036406517028809

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00053715705871582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00025582313537598

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00078201293945312

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=39 
 Execution Time:0.00046515464782715

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=39 
 Execution Time:0.00047612190246582

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=39 
 Execution Time:0.00036096572875977

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=39 
 Execution Time:0.00039100646972656

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='39' and office_id='1' 
 Execution Time:0.00037693977355957

select * from examination_chargesdetails where  examination_id= '39' 
 Execution Time:0.00020503997802734

SELECT *
FROM `examination`
WHERE `examination_id` = 43 
 Execution Time:0.00082683563232422

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00045299530029297

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00036787986755371

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=43 
 Execution Time:0.00081205368041992

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=43 
 Execution Time:0.0006871223449707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=43 
 Execution Time:0.00064206123352051

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=43 
 Execution Time:0.00046420097351074

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='43' and office_id='1' 
 Execution Time:0.00052094459533691

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00025296211242676

SELECT *
FROM `examination`
WHERE `examination_id` = 84 
 Execution Time:0.00077009201049805

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00036311149597168

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00019097328186035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00019192695617676

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=84 
 Execution Time:0.0005180835723877

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=84 
 Execution Time:0.00046801567077637

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=84 
 Execution Time:0.00038313865661621

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=84 
 Execution Time:0.00028800964355469

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='84' and office_id='1' 
 Execution Time:0.00046801567077637

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00017309188842773

SELECT *
FROM `examination`
WHERE `examination_id` = 83 
 Execution Time:0.0016629695892334

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00042414665222168

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00024890899658203

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=83 
 Execution Time:0.00076413154602051

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=83 
 Execution Time:0.00061917304992676

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=83 
 Execution Time:0.00056099891662598

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=83 
 Execution Time:0.0003669261932373

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='83' and office_id='1' 
 Execution Time:0.0016720294952393

select * from examination_chargesdetails where  examination_id= '83' 
 Execution Time:0.00033092498779297

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037479400634766

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00020384788513184

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00020384788513184

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00020480155944824

SELECT *
FROM `examination`
WHERE `examination_id` = 78 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00034308433532715

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032901763916016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=78 
 Execution Time:0.00089597702026367

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=78 
 Execution Time:0.00087881088256836

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=78 
 Execution Time:0.0009150505065918

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=78 
 Execution Time:0.00074481964111328

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='78' and office_id='1' 
 Execution Time:0.00071001052856445

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00020384788513184

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00020480155944824

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00018405914306641

SELECT *
FROM `examination`
WHERE `examination_id` = 77 
 Execution Time:0.00069904327392578

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00024795532226562

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00050592422485352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00027084350585938

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00045013427734375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=77 
 Execution Time:0.00064706802368164

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=77 
 Execution Time:0.00065088272094727

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=77 
 Execution Time:0.00062203407287598

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=77 
 Execution Time:0.00049901008605957

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='77' and office_id='1' 
 Execution Time:0.0010309219360352

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.00082707405090332

SELECT *
FROM `examination`
WHERE `examination_id` = 75 
 Execution Time:0.0012331008911133

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00030183792114258

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00040698051452637

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=75 
 Execution Time:0.00058102607727051

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=75 
 Execution Time:0.00074410438537598

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=75 
 Execution Time:0.0004420280456543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=75 
 Execution Time:0.00064802169799805

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='75' and office_id='1' 
 Execution Time:0.00046110153198242

select * from examination_chargesdetails where  examination_id= '75' 
 Execution Time:0.00035405158996582

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.00062799453735352

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00071597099304199

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0005190372467041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00024986267089844

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.0010809898376465

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.00098204612731934

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.00082802772521973

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.00066804885864258

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.00077414512634277

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.0004730224609375

SELECT *
FROM `examination`
WHERE `examination_id` = 44 
 Execution Time:0.0010659694671631

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00039291381835938

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00016188621520996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0002589225769043

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=44 
 Execution Time:0.00055384635925293

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=44 
 Execution Time:0.00054311752319336

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=44 
 Execution Time:0.00067591667175293

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=44 
 Execution Time:0.00060486793518066

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='44' and office_id='1' 
 Execution Time:0.00069999694824219

select * from examination_chargesdetails where  examination_id= '44' 
 Execution Time:0.00023698806762695

SELECT *
FROM `examination`
WHERE `examination_id` = 39 
 Execution Time:0.0010509490966797

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 8 
 Execution Time:0.00026297569274902

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00046610832214355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0001981258392334

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00027203559875488

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=39 
 Execution Time:0.00088906288146973

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=39 
 Execution Time:0.00086092948913574

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=39 
 Execution Time:0.00079989433288574

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=39 
 Execution Time:0.00040292739868164

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='39' and office_id='1' 
 Execution Time:0.00038504600524902

select * from examination_chargesdetails where  examination_id= '39' 
 Execution Time:0.00026106834411621

SELECT *
FROM `examination`
WHERE `examination_id` = 35 
 Execution Time:0.00066804885864258

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0003058910369873

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00018906593322754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00016188621520996

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=35 
 Execution Time:0.0006110668182373

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=35 
 Execution Time:0.00054001808166504

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=35 
 Execution Time:0.00048208236694336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=35 
 Execution Time:0.00037002563476562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='35' and office_id='1' 
 Execution Time:0.00041007995605469

select * from examination_chargesdetails where  examination_id= '35' 
 Execution Time:0.00020194053649902

SELECT *
FROM `examination`
WHERE `examination_id` = 26 
 Execution Time:0.0008549690246582

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00027203559875488

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00021791458129883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00014996528625488

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=26 
 Execution Time:0.00045108795166016

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=26 
 Execution Time:0.00042581558227539

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=26 
 Execution Time:0.00044393539428711

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=26 
 Execution Time:0.00028085708618164

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='26' and office_id='1' 
 Execution Time:0.00034904479980469

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00016379356384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 78 
 Execution Time:0.0002439022064209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 74 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '75' and   office_id= '1' 
 Execution Time:0.00093197822570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 75 
 Execution Time:0.00043010711669922

select * from examination_chargesdetails where  examination_id= '75' 
 Execution Time:0.00059199333190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086498260498047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086498260498047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084400177001953

SELECT *
FROM `examination`
WHERE `examination_id` = 75 
 Execution Time:0.00092601776123047

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00060701370239258

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00025510787963867

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00039887428283691

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=75 
 Execution Time:0.00028586387634277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=75 
 Execution Time:0.0002589225769043

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=75 
 Execution Time:0.00020790100097656

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=75 
 Execution Time:0.00023484230041504

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='75' and office_id='1' 
 Execution Time:0.0003049373626709

select * from examination_chargesdetails where  examination_id= '75' 
 Execution Time:0.00025391578674316


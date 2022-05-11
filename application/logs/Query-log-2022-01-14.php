select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00064897537231445

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066184997558594

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066184997558594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 140 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 176 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 140 
 Execution Time:0.00044679641723633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 176 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578


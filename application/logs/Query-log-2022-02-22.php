select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016858577728271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016858577728271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016858577728271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019187927246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016858577728271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019187927246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019111633300781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023009777069092

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016858577728271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019187927246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000579833984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000579833984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_registration where  patient_registration_id= '105' and  office_id= '1' 
 Execution Time:0.014114141464233

select count(*) as cnt from patient_registration where  patient_registration_id= '105' and  office_id= '1' 
 Execution Time:0.014114141464233

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012819766998291

select count(*) as cnt from patient_registration where  patient_registration_id= '105' and  office_id= '1' 
 Execution Time:0.014114141464233

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012819766998291

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='105' and  office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 123 
 Execution Time:0.0013570785522461

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 128 
 Execution Time:0.0019500255584717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025420188903809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036749839782715

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036749839782715

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013129711151123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 123 
 Execution Time:0.00085210800170898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 128 
 Execution Time:0.0024580955505371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 123 
 Execution Time:0.0048868656158447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039260387420654

select * from examination where examination_id= '108' and   office_id= '1' 
 Execution Time:0.002918004989624

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027871131896973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 108 
 Execution Time:0.015925168991089

select * from examination_chargesdetails where  examination_id= '108' 
 Execution Time:0.017532110214233

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036270618438721

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035059452056885

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035059452056885

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0047030448913574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0027070045471191

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062894821166992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075507164001465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052309036254883

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016241073608398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016241073608398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054478645324707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056910514831543

SELECT *
FROM `examination`
WHERE `examination_id` = 108 
 Execution Time:0.00046706199645996

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00020098686218262

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00042486190795898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 123 
 Execution Time:0.00018596649169922

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00012111663818359

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=108 
 Execution Time:0.00043582916259766

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=108 
 Execution Time:0.00022101402282715

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=108 
 Execution Time:0.00016593933105469

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=108 
 Execution Time:0.00031399726867676

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='108' and office_id='1' 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '108' 
 Execution Time:0.00019001960754395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 123 
 Execution Time:0.00021481513977051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 128 
 Execution Time:0.00014686584472656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 123 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from examination where examination_id= '108' and   office_id= '1' 
 Execution Time:0.00069904327392578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 108 
 Execution Time:0.0002129077911377

select * from examination_chargesdetails where  examination_id= '108' 
 Execution Time:0.00021219253540039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00331711769104

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00331711769104

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.0032789707183838

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.0025539398193359

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.0041100978851318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039200782775879

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.0034379959106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.00037598609924316

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.0002591609954834

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034000873565674

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034000873565674

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054287910461426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085091590881348

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00059986114501953

SELECT *
FROM `examination`
WHERE `examination_id` = 109 
 Execution Time:0.00061988830566406

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00018501281738281

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00057220458984375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00017905235290527

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00012707710266113

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=109 
 Execution Time:0.0016570091247559

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=109 
 Execution Time:0.00047111511230469

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=109 
 Execution Time:0.00045299530029297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=109 
 Execution Time:0.00026082992553711

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='109' and office_id='1' 
 Execution Time:0.00042080879211426

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.0011539459228516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025990009307861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025990009307861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025990009307861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.00038409233093262

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.00065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.0041799545288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.0018439292907715

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.0034639835357666

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036280155181885

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056290626525879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056290626525879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017209053039551

select count(*) as cnt from patient_registration where  patient_registration_id= '122' and  office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from patient_registration where  patient_registration_id= '122' and  office_id= '1' 
 Execution Time:0.0006110668182373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='122' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010030269622803

select count(*) as cnt from patient_registration where  patient_registration_id= '122' and  office_id= '1' 
 Execution Time:0.0006110668182373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='122' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010030269622803

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='122' and  office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008997917175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008997917175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008997917175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0012471675872803

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0012471675872803

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.001917839050293

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0012471675872803

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.001917839050293

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00024318695068359

select count(*) as cnt from patient_registration where  patient_registration_id= '108' and  office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from patient_registration where  patient_registration_id= '108' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='108' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from patient_registration where  patient_registration_id= '108' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='108' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066494941711426

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='108' and  office_id= '1' 
 Execution Time:0.00018787384033203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013668537139893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013668537139893

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019478797912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019478797912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019478797912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 122 
 Execution Time:0.00041413307189941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 131 
 Execution Time:0.00046920776367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018680095672607

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 122 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 131 
 Execution Time:0.00058794021606445

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 122 
 Execution Time:0.00076985359191895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select * from examination where examination_id= '110' and   office_id= '1' 
 Execution Time:0.00092601776123047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013461112976074

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 110 
 Execution Time:0.0011801719665527

select * from examination_chargesdetails where  examination_id= '110' 
 Execution Time:0.0011470317840576

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015900135040283

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015900135040283

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018489360809326

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071382522583008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071382522583008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014870166778564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014870166778564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010261535644531

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014870166778564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093889236450195

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077319145202637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077319145202637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014269351959229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014269351959229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014269351959229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00047206878662109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 108 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select * from examination where examination_id= '95' and   office_id= '1' 
 Execution Time:0.0010819435119629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 95 
 Execution Time:0.00045108795166016

select * from examination_chargesdetails where  examination_id= '95' 
 Execution Time:0.00040388107299805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0001988410949707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054717063903809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 126 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 134 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020480155944824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 125 
 Execution Time:0.00052714347839355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 132 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 125 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 132 
 Execution Time:0.00046896934509277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 125 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select * from examination where examination_id= '112' and   office_id= '1' 
 Execution Time:0.00098204612731934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 112 
 Execution Time:0.001366138458252

select * from examination_chargesdetails where  examination_id= '112' 
 Execution Time:0.0026090145111084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0061969757080078

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094985961914062

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094985961914062

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 125 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 132 
 Execution Time:0.00034499168395996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 125 
 Execution Time:0.0010080337524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088810920715332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088810920715332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from examination where examination_id= '112' and   office_id= '1' 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 112 
 Execution Time:0.00035381317138672

select * from examination_chargesdetails where  examination_id= '112' 
 Execution Time:0.0002748966217041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029928684234619

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 122 
 Execution Time:0.00038290023803711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 131 
 Execution Time:0.00027298927307129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 122 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from examination where examination_id= '110' and   office_id= '1' 
 Execution Time:0.0009160041809082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 110 
 Execution Time:0.0002439022064209

select * from examination_chargesdetails where  examination_id= '110' 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016100406646729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016100406646729

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089693069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016100406646729

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016100406646729

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034971237182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034971237182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035390853881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034971237182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0055770874023438

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.002018928527832

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.003727912902832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012071132659912

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.0030639171600342

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.0020449161529541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045080184936523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045080184936523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016970634460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 125 
 Execution Time:0.00062799453735352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 132 
 Execution Time:0.00052809715270996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 125 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003359317779541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091409683227539

select * from examination where examination_id= '112' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 112 
 Execution Time:0.00013589859008789

select * from examination_chargesdetails where  examination_id= '112' 
 Execution Time:0.00012016296386719

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='15' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012431144714355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.00017094612121582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.00069618225097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.0004279613494873

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.00039982795715332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055885314941406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055885314941406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 126 
 Execution Time:0.00021600723266602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 134 
 Execution Time:0.00017809867858887

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 126 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select * from examination where examination_id= '111' and   office_id= '1' 
 Execution Time:0.0007479190826416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 111 
 Execution Time:0.00039386749267578

select * from examination_chargesdetails where  examination_id= '111' 
 Execution Time:0.00020980834960938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094103813171387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094103813171387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012450218200684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012450218200684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012450218200684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011599063873291

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011599063873291

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012791156768799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010511875152588

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013558864593506

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013558864593506

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038478374481201

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032029151916504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032029151916504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056869983673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039408206939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039408206939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039408206939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027358531951904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039408206939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027358531951904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033011436462402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0051078796386719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039408206939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027358531951904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 126 
 Execution Time:0.00038886070251465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 134 
 Execution Time:0.0013480186462402

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 126 
 Execution Time:0.0025420188903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010321140289307

select * from examination where examination_id= '111' and   office_id= '1' 
 Execution Time:0.00076603889465332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 111 
 Execution Time:0.00056099891662598

select * from examination_chargesdetails where  examination_id= '111' 
 Execution Time:0.00059103965759277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014340877532959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014340877532959

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031089782714844

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015521049499512

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0024669170379639

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021839141845703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021839141845703

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021839141845703

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.00052094459533691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0051250457763672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0051250457763672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0058920383453369

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018539428710938

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.0011410713195801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.00024580955505371

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.00018191337585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018541812896729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018541812896729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018541812896729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 127 
 Execution Time:0.0060219764709473

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 135 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010480880737305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 127 
 Execution Time:0.0017590522766113

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 135 
 Execution Time:0.00033092498779297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 127 
 Execution Time:0.0013489723205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0042200088500977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017209053039551

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017209053039551

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0049331188201904

select * from examination where examination_id= '113' and   office_id= '1' 
 Execution Time:0.0036420822143555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031998157501221

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 113 
 Execution Time:0.0037739276885986

select * from examination_chargesdetails where  examination_id= '113' 
 Execution Time:0.0028331279754639

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0020120143890381

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097990036010742

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00079989433288574

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00079989433288574

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078082084655762

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078082084655762

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023722648620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 127 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 135 
 Execution Time:0.00024986267089844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 127 
 Execution Time:0.00082302093505859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003587007522583

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from examination where examination_id= '113' and   office_id= '1' 
 Execution Time:0.0022709369659424

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 113 
 Execution Time:0.00049114227294922

select * from examination_chargesdetails where  examination_id= '113' 
 Execution Time:0.00039911270141602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062298774719238

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060319900512695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00031185150146484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065898895263672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00023317337036133

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 128 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '114' and   office_id= '1' 
 Execution Time:0.00089597702026367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 114 
 Execution Time:0.00052189826965332

select * from examination_chargesdetails where  examination_id= '114' 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050806999206543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016829967498779

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001349925994873

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061202049255371

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082921981811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00025391578674316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 128 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00050210952758789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00066995620727539

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 128 
 Execution Time:0.00067806243896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011489391326904

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011489391326904

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013389587402344

select * from examination where examination_id= '114' and   office_id= '1' 
 Execution Time:0.0036008358001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 114 
 Execution Time:0.0017821788787842

select * from examination_chargesdetails where  examination_id= '114' 
 Execution Time:0.0040910243988037

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012631416320801

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00065898895263672

SELECT *
FROM `examination`
WHERE `examination_id` = 114 
 Execution Time:0.00085091590881348

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00045299530029297

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00023508071899414

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 4 
 Execution Time:0.00023102760314941

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=114 
 Execution Time:0.00053691864013672

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=114 
 Execution Time:0.00052094459533691

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=114 
 Execution Time:0.00046110153198242

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=114 
 Execution Time:0.0005650520324707

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='114' and office_id='1' 
 Execution Time:0.00084805488586426

select * from examination_chargesdetails where  examination_id= '114' 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00025200843811035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 128 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.014778852462769

select * from examination where examination_id= '114' and   office_id= '1' 
 Execution Time:0.0018379688262939

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 114 
 Execution Time:0.00059103965759277

select * from examination_chargesdetails where  examination_id= '114' 
 Execution Time:0.003148078918457

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010647773742676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010647773742676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028469562530518

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0099170207977295

SELECT *
FROM `examination`
WHERE `examination_id` = 108 
 Execution Time:0.0031969547271729

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0090241432189941

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0089030265808105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 123 
 Execution Time:0.0058588981628418

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.010104179382324

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=108 
 Execution Time:0.0010750293731689

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=108 
 Execution Time:0.0005490779876709

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=108 
 Execution Time:0.00051593780517578

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=108 
 Execution Time:0.0002739429473877

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='108' and office_id='1' 
 Execution Time:0.00058794021606445

select * from examination_chargesdetails where  examination_id= '108' 
 Execution Time:0.00018596649169922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 128 
 Execution Time:0.0041191577911377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 136 
 Execution Time:0.00087690353393555

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 128 
 Execution Time:0.0013539791107178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039238929748535

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039238929748535

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from examination where examination_id= '115' and   office_id= '1' 
 Execution Time:0.0018479824066162

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 115 
 Execution Time:0.00097203254699707

select * from examination_chargesdetails where  examination_id= '115' 
 Execution Time:0.001662015914917

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087308883666992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.004263162612915

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044012069702148

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.005836009979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019490718841553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019490718841553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019490718841553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019869804382324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007357120513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007357120513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007357120513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007357120513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094199180603027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094199180603027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083804130554199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011348724365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011348724365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038549900054932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011348724365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017409324645996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017409324645996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.024399995803833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.024399995803833

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024899005889893

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021810531616211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.024399995803833

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0085740089416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030560493469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030560493469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047318935394287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046868324279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030560493469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='122' and  office_id= '1' 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051019191741943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051019191741943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0051019191741943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00049185752868652

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 129 
 Execution Time:0.00054407119750977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 105 
 Execution Time:0.00074315071105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select * from examination where examination_id= '109' and   office_id= '1' 
 Execution Time:0.00098299980163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 109 
 Execution Time:0.0020318031311035

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.0019280910491943

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022580623626709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022580623626709

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032150745391846

SELECT *
FROM `examination`
WHERE `examination_id` = 101 
 Execution Time:0.00076889991760254

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00033092498779297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00025486946105957

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=101 
 Execution Time:0.00047206878662109

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=101 
 Execution Time:0.00031089782714844

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=101 
 Execution Time:0.00031018257141113

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=101 
 Execution Time:0.00025701522827148

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='101' and office_id='1' 
 Execution Time:0.0004570484161377

select * from examination_chargesdetails where  examination_id= '101' 
 Execution Time:0.00020098686218262

SELECT *
FROM `examination`
WHERE `examination_id` = 109 
 Execution Time:0.0038931369781494

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00058698654174805

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00051712989807129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00031304359436035

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=109 
 Execution Time:0.00086688995361328

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=109 
 Execution Time:0.0006251335144043

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=109 
 Execution Time:0.00077700614929199

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=109 
 Execution Time:0.00043296813964844

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='109' and office_id='1' 
 Execution Time:0.00091385841369629

select * from examination_chargesdetails where  examination_id= '109' 
 Execution Time:0.00030112266540527

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00072097778320312

SELECT *
FROM `examination`
WHERE `examination_id` = 113 
 Execution Time:0.00083017349243164

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00032806396484375

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 127 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00031208992004395

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=113 
 Execution Time:0.00071120262145996

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=113 
 Execution Time:0.00049901008605957

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=113 
 Execution Time:0.00046896934509277

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=113 
 Execution Time:0.00034499168395996

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='113' and office_id='1' 
 Execution Time:0.00065088272094727

select * from examination_chargesdetails where  examination_id= '113' 
 Execution Time:0.00023603439331055


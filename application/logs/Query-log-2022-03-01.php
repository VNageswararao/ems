select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018219947814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018219947814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036509037017822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018219947814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036509037017822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029451847076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023679733276367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018219947814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036509037017822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021932125091553

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021932125091553

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002284049987793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021932125091553

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002284049987793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00034785270690918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 224 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021460056304932

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00083589553833008

SELECT *
FROM `examination`
WHERE `examination_id` = 167 
 Execution Time:0.00063586235046387

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00022506713867188

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00062990188598633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0004270076751709

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=167 
 Execution Time:0.0044770240783691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=167 
 Execution Time:0.003136157989502

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=167 
 Execution Time:0.0027358531951904

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=167 
 Execution Time:0.002331018447876

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='167' and office_id='1' 
 Execution Time:0.0038619041442871

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.0021440982818604

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00025510787963867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 154 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select * from examination where examination_id= '134' and   office_id= '1' 
 Execution Time:0.0011811256408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 134 
 Execution Time:0.00047779083251953

select * from examination_chargesdetails where  examination_id= '134' 
 Execution Time:0.00027799606323242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030090808868408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.047965049743652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.047965049743652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039458274841309

SELECT *
FROM `examination`
WHERE `examination_id` = 134 
 Execution Time:0.00068807601928711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00026392936706543

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00017023086547852

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00028800964355469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=134 
 Execution Time:0.00056910514831543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=134 
 Execution Time:0.0003969669342041

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=134 
 Execution Time:0.0003662109375

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=134 
 Execution Time:0.00026082992553711

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='134' and office_id='1' 
 Execution Time:0.0007011890411377

select * from examination_chargesdetails where  examination_id= '134' 
 Execution Time:0.00016689300537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023047924041748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023047924041748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013701915740967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023047924041748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013701915740967

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 216 
 Execution Time:0.0024769306182861

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 165 
 Execution Time:0.001384973526001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025451183319092

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037918090820312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021960735321045

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021960735321045

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012218952178955

select * from examination where examination_id= '181' and   office_id= '1' 
 Execution Time:0.0089499950408936

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022311210632324

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 181 
 Execution Time:0.0026330947875977

select * from examination_chargesdetails where  examination_id= '181' 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074005126953125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074005126953125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00077700614929199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010640621185303

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010051727294922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010051727294922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010051727294922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.0012581348419189

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.00084805488586426

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 227 
 Execution Time:0.0028760433197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select * from examination where examination_id= '207' and   office_id= '1' 
 Execution Time:0.0012309551239014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 207 
 Execution Time:0.00058412551879883

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00052213668823242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032391548156738

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011868476867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011868476867676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012359619140625

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='69' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0023880004882812

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098204612731934

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045013427734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00055480003356934

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.00027108192443848

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 227 
 Execution Time:0.0008552074432373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select * from examination where examination_id= '207' and   office_id= '1' 
 Execution Time:0.0038900375366211

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043089389801025

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 207 
 Execution Time:0.0028941631317139

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.0050208568572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='69' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081610679626465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034689903259277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091409683227539

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088381767272949

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00077319145202637

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.00090694427490234

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00035905838012695

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00054502487182617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00059700012207031

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.0010418891906738

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.00048995018005371

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.00039196014404297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.0004580020904541

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.00071597099304199

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.00020718574523926

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 227 
 Execution Time:0.00064706802368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from examination where examination_id= '207' and   office_id= '1' 
 Execution Time:0.00078487396240234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 207 
 Execution Time:0.00043106079101562

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.0002601146697998

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00078797340393066

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.00046086311340332

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00017905235290527

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00062203407287598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.0002598762512207

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00026512145996094

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.0004570484161377

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.00024580955505371

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.00024294853210449

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.00048089027404785

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.00080299377441406

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00023484230041504

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041604042053223

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.00065922737121582

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0002739429473877

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00019502639770508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00025582313537598

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00024294853210449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.00071907043457031

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.00041484832763672

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.00030803680419922

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.0002589225769043

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.0006110668182373

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00023603439331055

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00057792663574219

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.00056791305541992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00019097328186035

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00039386749267578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00037693977355957

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.00069093704223633

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.00039005279541016

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.00032687187194824

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.00026202201843262

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.00054407119750977

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00013184547424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001727819442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001727819442749

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015370845794678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001727819442749

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017580986022949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017580986022949

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.012021064758301

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00087285041809082

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.000762939453125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00032305717468262

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045919418334961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0015218257904053

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.0015318393707275

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.0005800724029541

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.00052094459533691

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.0003960132598877

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.00066804885864258

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00053501129150391

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0034551620483398

SELECT *
FROM `examination`
WHERE `examination_id` = 207 
 Execution Time:0.0032839775085449

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0053229331970215

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0015559196472168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.0026140213012695

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0032591819763184

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=207 
 Execution Time:0.003248929977417

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=207 
 Execution Time:0.003154993057251

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=207 
 Execution Time:0.0035049915313721

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=207 
 Execution Time:0.0011329650878906

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='207' and office_id='1' 
 Execution Time:0.0036330223083496

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.0014739036560059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013978481292725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013978481292725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013978481292725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028820037841797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028820037841797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019569396972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039157867431641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031249523162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028820037841797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019569396972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037119388580322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 216 
 Execution Time:0.00020289421081543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 165 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from examination where examination_id= '181' and   office_id= '1' 
 Execution Time:0.0010550022125244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 181 
 Execution Time:0.00024509429931641

select * from examination_chargesdetails where  examination_id= '181' 
 Execution Time:0.00022792816162109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069284439086914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069284439086914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088882446289062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.0019609928131104

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 216 
 Execution Time:0.00040221214294434

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 165 
 Execution Time:0.0011970996856689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select * from examination where examination_id= '181' and   office_id= '1' 
 Execution Time:0.001115083694458

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 181 
 Execution Time:0.0007328987121582

select * from examination_chargesdetails where  examination_id= '181' 
 Execution Time:0.00031208992004395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043010711669922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090479850769043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090479850769043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090479850769043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 246 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011711120605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011711120605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035569667816162

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050308704376221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048501491546631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011711120605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021886825561523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017268657684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017268657684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019822120666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017268657684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069689750671387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069689750671387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089287757873535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089287757873535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00059890747070312

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 246 
 Execution Time:0.00039887428283691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 229 
 Execution Time:0.0019881725311279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select * from examination where examination_id= '208' and   office_id= '1' 
 Execution Time:0.0017600059509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 208 
 Execution Time:0.0030272006988525

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.013262987136841

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020334959030151

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020334959030151

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

SELECT *
FROM `examination`
WHERE `examination_id` = 208 
 Execution Time:0.0010571479797363

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00076699256896973

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00056695938110352

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=208 
 Execution Time:0.00066208839416504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=208 
 Execution Time:0.00050902366638184

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=208 
 Execution Time:0.00038290023803711

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=208 
 Execution Time:0.00035285949707031

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='208' and office_id='1' 
 Execution Time:0.00066709518432617

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 246 
 Execution Time:0.00017499923706055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 229 
 Execution Time:0.0010509490966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select * from examination where examination_id= '208' and   office_id= '1' 
 Execution Time:0.0010631084442139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 208 
 Execution Time:0.00038790702819824

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.00028300285339355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0017180442810059

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049495697021484

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00068521499633789

SELECT *
FROM `examination`
WHERE `examination_id` = 208 
 Execution Time:0.000640869140625

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0002589225769043

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00023984909057617

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00034379959106445

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=208 
 Execution Time:0.0012450218200684

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=208 
 Execution Time:0.0010819435119629

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=208 
 Execution Time:0.0016541481018066

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=208 
 Execution Time:0.00031614303588867

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='208' and office_id='1' 
 Execution Time:0.00098204612731934

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00047922134399414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095105171203613

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095105171203613

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030138492584229

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 249 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 249 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0048098564147949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00057387351989746

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 231 
 Execution Time:0.0014910697937012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072717666625977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093793869018555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093793869018555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00193190574646

select * from examination where examination_id= '209' and   office_id= '1' 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 209 
 Execution Time:0.0060830116271973

select * from examination_chargesdetails where  examination_id= '209' 
 Execution Time:0.0031719207763672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082206726074219

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00022792816162109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 231 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015079975128174

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015079975128174

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from examination where examination_id= '209' and   office_id= '1' 
 Execution Time:0.0031781196594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 209 
 Execution Time:0.0013129711151123

select * from examination_chargesdetails where  examination_id= '209' 
 Execution Time:0.0017631053924561

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080084800720215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00063610076904297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00033903121948242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 231 
 Execution Time:0.00097417831420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select * from examination where examination_id= '209' and   office_id= '1' 
 Execution Time:0.00084114074707031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 209 
 Execution Time:0.00041389465332031

select * from examination_chargesdetails where  examination_id= '209' 
 Execution Time:0.00023913383483887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 231 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 248 
 Execution Time:0.00052404403686523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 231 
 Execution Time:0.00055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select * from examination where examination_id= '209' and   office_id= '1' 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 209 
 Execution Time:0.00048589706420898

select * from examination_chargesdetails where  examination_id= '209' 
 Execution Time:0.00027704238891602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093913078308105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009150505065918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009150505065918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 234 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 251 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.00022315979003906

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 249 
 Execution Time:0.00015687942504883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 232 
 Execution Time:0.0006258487701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from examination where examination_id= '210' and   office_id= '1' 
 Execution Time:0.0010759830474854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 210 
 Execution Time:0.00071501731872559

select * from examination_chargesdetails where  examination_id= '210' 
 Execution Time:0.000518798828125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094294548034668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095295906066895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095295906066895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 235 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 252 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 249 
 Execution Time:0.00022506713867188

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 232 
 Execution Time:0.00074601173400879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select * from examination where examination_id= '210' and   office_id= '1' 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 210 
 Execution Time:0.00042819976806641

select * from examination_chargesdetails where  examination_id= '210' 
 Execution Time:0.00063204765319824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='60' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001187801361084

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00090408325195312

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010700225830078

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 230 
 Execution Time:0.00026082992553711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 247 
 Execution Time:0.00018978118896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093889236450195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 234 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 251 
 Execution Time:0.00034999847412109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 234 
 Execution Time:0.0006260871887207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095510482788086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095510482788086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086498260498047

select * from examination where examination_id= '211' and   office_id= '1' 
 Execution Time:0.0009608268737793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 211 
 Execution Time:0.00064206123352051

select * from examination_chargesdetails where  examination_id= '211' 
 Execution Time:0.00050592422485352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007169246673584

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001474142074585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012831687927246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012831687927246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078105926513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012831687927246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 246 
 Execution Time:0.00035691261291504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 229 
 Execution Time:0.00083780288696289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027260780334473

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027260780334473

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032989978790283

select * from examination where examination_id= '208' and   office_id= '1' 
 Execution Time:0.0037291049957275

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 208 
 Execution Time:0.00093698501586914

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.00096487998962402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039899349212646

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039899349212646

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039899349212646

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 228 
 Execution Time:0.0026400089263916

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 245 
 Execution Time:0.0023679733276367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 228 
 Execution Time:0.0014650821685791

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 245 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 235 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 252 
 Execution Time:0.00017595291137695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 235 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051212310791016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051212310791016

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select * from examination where examination_id= '212' and   office_id= '1' 
 Execution Time:0.00076413154602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 212 
 Execution Time:0.00040388107299805

select * from examination_chargesdetails where  examination_id= '212' 
 Execution Time:0.00024700164794922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073099136352539

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045108795166016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065922737121582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010368824005127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010368824005127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 236 
 Execution Time:0.00045490264892578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 253 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 236 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 253 
 Execution Time:0.00022721290588379

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 236 
 Execution Time:0.0010550022125244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select * from examination where examination_id= '215' and   office_id= '1' 
 Execution Time:0.00075817108154297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 215 
 Execution Time:0.00056004524230957

select * from examination_chargesdetails where  examination_id= '215' 
 Execution Time:0.00061917304992676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013928413391113

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067591667175293

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0008699893951416

SELECT *
FROM `examination`
WHERE `examination_id` = 215 
 Execution Time:0.00064611434936523

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024795532226562

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 236 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00046586990356445

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=215 
 Execution Time:0.00075101852416992

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=215 
 Execution Time:0.00058603286743164

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=215 
 Execution Time:0.0018730163574219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=215 
 Execution Time:0.00086116790771484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='215' and office_id='1' 
 Execution Time:0.001471996307373

select * from examination_chargesdetails where  examination_id= '215' 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 236 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 253 
 Execution Time:0.00047492980957031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 236 
 Execution Time:0.00072097778320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '215' and   office_id= '1' 
 Execution Time:0.0012280941009521

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032620429992676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 215 
 Execution Time:0.0015108585357666

select * from examination_chargesdetails where  examination_id= '215' 
 Execution Time:0.0011439323425293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042080879211426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010261535644531

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010261535644531

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 230 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 247 
 Execution Time:0.00028705596923828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 230 
 Execution Time:0.00095295906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select * from examination where examination_id= '213' and   office_id= '1' 
 Execution Time:0.0010199546813965

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 213 
 Execution Time:0.0010910034179688

select * from examination_chargesdetails where  examination_id= '213' 
 Execution Time:0.0010380744934082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012819766998291

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016121864318848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016121864318848

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 228 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 245 
 Execution Time:0.0002601146697998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 228 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select * from examination where examination_id= '214' and   office_id= '1' 
 Execution Time:0.00085020065307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 214 
 Execution Time:0.00022101402282715

select * from examination_chargesdetails where  examination_id= '214' 
 Execution Time:0.00034809112548828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0028002262115479

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0028002262115479

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.002424955368042

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.002424955368042

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0035371780395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067858695983887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067858695983887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016908645629883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001237154006958

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067858695983887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016078948974609

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00130295753479

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 228 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 245 
 Execution Time:0.00017285346984863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 228 
 Execution Time:0.00064206123352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from examination where examination_id= '214' and   office_id= '1' 
 Execution Time:0.0010509490966797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 214 
 Execution Time:0.00032997131347656

select * from examination_chargesdetails where  examination_id= '214' 
 Execution Time:0.00038003921508789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034523010253906

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 230 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 247 
 Execution Time:0.00024008750915527

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 230 
 Execution Time:0.0005488395690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from examination where examination_id= '213' and   office_id= '1' 
 Execution Time:0.0005640983581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 213 
 Execution Time:0.00049400329589844

select * from examination_chargesdetails where  examination_id= '213' 
 Execution Time:0.00030303001403809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026297569274902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 237 
 Execution Time:0.00031781196594238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 254 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 237 
 Execution Time:0.00075483322143555

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 254 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086379051208496

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086379051208496

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086379051208496

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 237 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 254 
 Execution Time:0.00039005279541016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 237 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select * from examination where examination_id= '216' and   office_id= '1' 
 Execution Time:0.001068115234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 216 
 Execution Time:0.0022609233856201

select * from examination_chargesdetails where  examination_id= '216' 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056219100952148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012280941009521

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012280941009521

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 237 
 Execution Time:0.00032782554626465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 254 
 Execution Time:0.00023484230041504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 237 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from examination where examination_id= '216' and   office_id= '1' 
 Execution Time:0.0006411075592041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 216 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '216' 
 Execution Time:0.00032186508178711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029890537261963

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064396858215332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='17' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088000297546387

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010261535644531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010261535644531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010261535644531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020780563354492

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020780563354492

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020780563354492

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.0018479824066162

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.0003209114074707

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 227 
 Execution Time:0.0009758472442627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001945972442627

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001945972442627

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select * from examination where examination_id= '207' and   office_id= '1' 
 Execution Time:0.0012421607971191

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 207 
 Execution Time:0.0013840198516846

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.0013771057128906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015671253204346

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 227 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 244 
 Execution Time:0.00028800964355469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 227 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from examination where examination_id= '207' and   office_id= '1' 
 Execution Time:0.00076699256896973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 207 
 Execution Time:0.00017714500427246

select * from examination_chargesdetails where  examination_id= '207' 
 Execution Time:0.00014615058898926

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 230 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 247 
 Execution Time:0.00033092498779297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 230 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from examination where examination_id= '213' and   office_id= '1' 
 Execution Time:0.00096678733825684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 213 
 Execution Time:0.00029897689819336

select * from examination_chargesdetails where  examination_id= '213' 
 Execution Time:0.00046801567077637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075197219848633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075197219848633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072813034057617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072813034057617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309


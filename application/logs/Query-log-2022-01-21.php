select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079250335693359

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079250335693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079250335693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079250335693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025908946990967

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-13' and  '2022-01-13' and  billing_master.office_id= 1        
 Execution Time:0.0018720626831055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-13' and  '2022-01-13' and  billing_master.office_id= 1        
 Execution Time:0.00089311599731445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055670738220215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055670738220215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055670738220215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from refraction_master where  name = '1' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from refraction_master where  name = '12' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from refraction_master where  name = '12' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from refraction_master where  name = '12.3' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011141300201416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011141300201416

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00037980079650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037648677825928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037648677825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004176139831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098578929901123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0066061019897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0099830627441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056860446929932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037648677825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00034308433532715


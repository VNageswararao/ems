select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066239833831787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066239833831787

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098960399627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066239833831787

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098960399627686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066239833831787

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098960399627686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012033939361572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015139102935791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096299648284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094690322875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066239833831787

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098960399627686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012033939361572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003216028213501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035731792449951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024349689483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024349689483643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024349689483643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030839443206787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030839443206787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030839443206787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030839443206787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0016300678253174

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0016300678253174

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-14' and '2021-10-14' and  patient_registration.office_id= 1      
 Execution Time:0.0035698413848877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0022420883178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032811164855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032811164855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016582012176514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032811164855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016582012176514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032811164855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016582012176514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053069591522217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032811164855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016582012176514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053069591522217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012648105621338

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0047049522399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020859241485596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058119297027588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010228157043457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0087010860443115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058119297027588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004504919052124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0093870162963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0093870162963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047481060028076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0093870162963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047481060028076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0093870162963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047481060028076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00345778465271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045778751373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0093870162963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047481060028076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00345778465271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022940635681152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047450065612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022940635681152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019621849060059

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017750263214111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017750263214111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017750263214111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017750263214111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043809413909912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047938823699951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017750263214111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043809413909912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082900524139404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021378993988037

select count(*) as cnt from patient_title where  name = 'Hh' and office_id= '1' 
 Execution Time:0.0041718482971191

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067782402038574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067782402038574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0066189765930176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070619583129883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070619583129883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031709671020508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0090939998626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0090939998626709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0083551406860352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014009475708008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014009475708008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027501583099365

select count(*) as cnt from patient_title where  name = 'Ff' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_title where  name = 'Ddd' and office_id= '1' 
 Execution Time:0.0018901824951172

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018551349639893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018551349639893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018551349639893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018551349639893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011143922805786

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018551349639893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037951469421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080480575561523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001147985458374

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001147985458374

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.006566047668457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049519538879395

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049519538879395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096702575683594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096702575683594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017988681793213

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029778480529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044918060302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044918060302734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044918060302734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044918060302734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044918060302734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031580924987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079894065856934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035161972045898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007789134979248

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007789134979248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013649463653564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013649463653564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062417984008789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062417984008789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034480094909668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034480094909668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034480094909668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034480094909668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034480094909668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0003969669342041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022599697113037

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0003969669342041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022599697113037

select fname,lname,mrdno from patient_registration where  patient_registration_id='1489' and  office_id= '1' 
 Execution Time:0.0014410018920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026471614837646

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026471614837646

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00055909156799316

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038981437683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029561519622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030181407928467

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036096572875977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023510456085205

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036096572875977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023510456085205

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021178722381592

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051784515380859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029189586639404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002901554107666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009310245513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009310245513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009310245513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009310245513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027761459350586

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016849040985107

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0017290115356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018882751464844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054717063903809

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026559829711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036361217498779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036361217498779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036361217498779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029339790344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044450759887695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036361217498779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029339790344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045161247253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043361186981201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025930404663086

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025930404663086

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00034904479980469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014190673828125

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00034904479980469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014190673828125

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010030269622803

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010030269622803

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013980865478516

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013980865478516

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0023200511932373

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0023200511932373

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085711479187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020079612731934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013530254364014

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013530254364014

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00016999244689941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0016031265258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046491622924805

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033528804779053

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00076413154602051

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00187087059021

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041859149932861

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0026788711547852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0028572082519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064611434936523

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064611434936523

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019190311431885

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019190311431885

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041179656982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.00048685073852539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1361' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024371147155762

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.00048685073852539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1361' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024371147155762

select fname,lname,mrdno from patient_registration where  patient_registration_id='1361' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036029815673828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036029815673828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005709171295166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031368732452393

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031368732452393

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017249584197998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032782554626465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023541450500488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039100646972656

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038402080535889

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011088848114014

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043201446533203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043201446533203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043201446533203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043201446533203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00071811676025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00059819221496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.027160882949829

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.027160882949829

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-14' and '2021-10-14' and  patient_registration.office_id= 1      
 Execution Time:0.012437105178833

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019551038742065

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019551038742065

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.020527124404907

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019551038742065

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.020527124404907

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.005579948425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019551038742065

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.020527124404907

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.005579948425293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0016670227050781

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0016670227050781

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-14' and '2021-10-14' and  patient_registration.office_id= 1      
 Execution Time:0.0036530494689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020339488983154

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00053882598876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00082087516784668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027267932891846

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00063490867614746

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00063490867614746

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001115083694458

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0007929801940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013000965118408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055320262908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002741813659668

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041389465332031

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004420280456543

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00043416023254395

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029370784759521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00068807601928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011599063873291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019159317016602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0005791187286377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027751922607422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027751922607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027751922607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027751922607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027751922607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031018257141113

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026159286499023

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026159286499023

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0061550140380859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036680698394775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036680698394775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036680698394775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036680698394775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024881362915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079689025878906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013978481292725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036680698394775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024881362915039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048508644104004

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016350746154785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016350746154785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021579265594482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011599063873291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011599063873291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011599063873291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011599063873291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011599063873291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044078826904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013811588287354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013811588287354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013811588287354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021431446075439

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021431446075439

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019640922546387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019640922546387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018458366394043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0081429481506348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.019385814666748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0050020217895508

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0050020217895508

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025179386138916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038390159606934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038390159606934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003169059753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015888214111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020639896392822

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048613548278809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019059181213379

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035610198974609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035610198974609

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028119087219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0087311267852783

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0024039745330811

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0042779445648193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048620700836182

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031929016113281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087714195251465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0007169246673584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00048708915710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025200843811035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00023484230041504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032820701599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00092792510986328

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00092792510986328

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0030570030212402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085711479187012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085711479187012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017139911651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010011196136475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010011196136475

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014259815216064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056262016296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056262016296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056262016296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056262016296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027430057525635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056262016296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027430057525635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049190521240234

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087904930114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087904930114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087904930114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015380382537842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087904930114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015380382537842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049879550933838

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054383277893066

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012409687042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012409687042236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027289390563965

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063586235046387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063586235046387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067720413208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067720413208008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067720413208008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067720413208008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038130283355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067720413208008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038130283355713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023839473724365

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040006637573242

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00015807151794434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071001052856445

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034661293029785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034661293029785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037569999694824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055384635925293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055384635925293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061678886413574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064682960510254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055909156799316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015761852264404

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040793418884277

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018038749694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018649101257324

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0062150955200195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041940212249756

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0016939640045166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037121772766113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037121772766113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037121772766113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037121772766113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021281242370605

select count(*) as cnt from patient_registration where  patient_registration_id= '1515' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '1515' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014028549194336

select count(*) as cnt from patient_registration where  patient_registration_id= '1515' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014028549194336

select fname,lname,mrdno from patient_registration where  patient_registration_id='1515' and  office_id= '1' 
 Execution Time:0.00016689300537109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033941268920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033941268920898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065016746520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065016746520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065016746520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065016746520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013489723205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013489723205566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045919418334961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045919418334961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094


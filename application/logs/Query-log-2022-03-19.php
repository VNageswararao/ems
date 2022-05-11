select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027389526367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027389526367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027389526367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024161338806152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027389526367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024161338806152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024359226226807

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027389526367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024161338806152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select count(*) as cnt from patient_registration where  patient_registration_id= '542' and  office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_registration where  patient_registration_id= '542' and  office_id= '1' 
 Execution Time:0.00043296813964844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=542  
 Execution Time:0.0037021636962891

select count(*) as cnt from patient_registration where  patient_registration_id= '542' and  office_id= '1' 
 Execution Time:0.00043296813964844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=542  
 Execution Time:0.0037021636962891

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=542  
 Execution Time:0.0011649131774902

select count(*) as cnt from patient_registration where  patient_registration_id= '542' and  office_id= '1' 
 Execution Time:0.00043296813964844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=542  
 Execution Time:0.0037021636962891

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=542  
 Execution Time:0.0011649131774902

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='542' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_appointment where  patient_registration_id = 542 and appointment_date= '2022-03-19' 
 Execution Time:0.00068497657775879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019383430480957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038831233978271

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038831233978271

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 542 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 605 
 Execution Time:0.00066184997558594

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 605  and `patient_registration_id` = 542 
 Execution Time:0.0023751258850098

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 542 
 Execution Time:0.0009918212890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '532' and   office_id= '1' 
 Execution Time:0.00089788436889648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 532 
 Execution Time:0.0037670135498047

select * from examination_chargesdetails where  examination_id= '532' 
 Execution Time:0.0032930374145508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0072741508483887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0072741508483887

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072884559631348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0052812099456787

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0052812099456787

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058913230895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053310394287109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053310394287109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048017501831055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048017501831055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0032749176025391

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0015161037445068

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0015161037445068

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-19' and '2022-03-19' and  patient_registration.office_id= 1      
 Execution Time:0.0042290687561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010128021240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010128021240234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017681121826172

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017681121826172

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018091201782227

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00039005279541016

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=520  
 Execution Time:0.0031580924987793

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00039005279541016

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=520  
 Execution Time:0.0031580924987793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=520  
 Execution Time:0.001068115234375

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00039005279541016

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=520  
 Execution Time:0.0031580924987793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=520  
 Execution Time:0.001068115234375

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='520' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066804885864258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_appointment where  patient_registration_id = 520 and appointment_date= '2022-03-19' 
 Execution Time:0.0051209926605225

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 542 
 Execution Time:0.00075292587280273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 610 
 Execution Time:0.00032997131347656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 610  and `patient_registration_id` = 542 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 547 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 611 
 Execution Time:0.00043797492980957

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 611  and `patient_registration_id` = 547 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002131462097168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 540 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 603 
 Execution Time:0.00020480155944824

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 603  and `patient_registration_id` = 540 
 Execution Time:0.0024929046630859

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 540 
 Execution Time:0.00085687637329102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '530' and   office_id= '1' 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 530 
 Execution Time:0.00064396858215332

select * from examination_chargesdetails where  examination_id= '530' 
 Execution Time:0.00039291381835938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010099411010742

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010099411010742

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 612 
 Execution Time:0.00036501884460449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 612  and `patient_registration_id` = 548 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013339519500732

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 541 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 604 
 Execution Time:0.00019717216491699

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 604  and `patient_registration_id` = 541 
 Execution Time:0.0002739429473877

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 541 
 Execution Time:0.00085687637329102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select * from examination where examination_id= '531' and   office_id= '1' 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 531 
 Execution Time:0.00045514106750488

select * from examination_chargesdetails where  examination_id= '531' 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013549327850342

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013549327850342

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013549327850342

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024604797363281

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='71' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083088874816895

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='71' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083088874816895

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='71' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083088874816895

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select user_id,name from  user where user_type=6 
 Execution Time:0.00040507316589355

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='71' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083088874816895

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select user_id,name from  user where user_type=6 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031185150146484

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012390613555908

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012390613555908

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='72' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065183639526367

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='72' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065183639526367

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='72' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065183639526367

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select user_id,name from  user where user_type=6 
 Execution Time:0.001849889755249

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='72' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065183639526367

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select user_id,name from  user where user_type=6 
 Execution Time:0.001849889755249

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-19' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010859966278076

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.00065088272094727

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 613 
 Execution Time:0.0003361701965332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 613  and `patient_registration_id` = 520 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079607963562012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079607963562012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002598762512207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.00053095817565918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 613 
 Execution Time:0.00037813186645508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 613  and `patient_registration_id` = 520 
 Execution Time:0.00030994415283203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 520 
 Execution Time:0.0014541149139404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select * from examination where examination_id= '540' and   office_id= '1' 
 Execution Time:0.0037300586700439

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032529830932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 540 
 Execution Time:0.003950834274292

select * from examination_chargesdetails where  examination_id= '540' 
 Execution Time:0.0039529800415039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076508522033691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076508522033691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011820793151855

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011820793151855

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 542 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 610 
 Execution Time:0.00033402442932129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 610  and `patient_registration_id` = 542 
 Execution Time:0.00019407272338867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 542 
 Execution Time:0.0011811256408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034618377685547

select * from examination where examination_id= '537' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 537 
 Execution Time:0.00023889541625977

select * from examination_chargesdetails where  examination_id= '537' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016350746154785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011799335479736

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011799335479736

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010380744934082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010380744934082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010380744934082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023388862609863

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0038540363311768

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073981285095215

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064992904663086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061416625976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014498233795166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061416625976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014498233795166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 549 
 Execution Time:0.00089788436889648

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 614 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 614  and `patient_registration_id` = 549 
 Execution Time:0.0084671974182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079319477081299

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031185150146484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029611587524414

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051283836364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051283836364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 550 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 615 
 Execution Time:0.00024104118347168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 615  and `patient_registration_id` = 550 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 550 
 Execution Time:0.00058603286743164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 615 
 Execution Time:0.00039792060852051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 615  and `patient_registration_id` = 550 
 Execution Time:0.0018908977508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041413307189941

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029492378234863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.0003669261932373

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.002838134765625

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.0003669261932373

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.002838134765625

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=547  
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.0003669261932373

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.002838134765625

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=547  
 Execution Time:0.00073599815368652

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='547' and  office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086593627929688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086593627929688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 549 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 614 
 Execution Time:0.00020623207092285

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 614  and `patient_registration_id` = 549 
 Execution Time:0.00048708915710449

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 549 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select * from examination where examination_id= '541' and   office_id= '1' 
 Execution Time:0.00095605850219727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 541 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '541' 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019409656524658

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019409656524658

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001291036605835

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018818378448486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018818378448486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018818378448486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018818378448486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018818378448486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011751651763916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093197822570801

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00036191940307617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 550 
 Execution Time:0.00052595138549805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 615 
 Execution Time:0.00031018257141113

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 615  and `patient_registration_id` = 550 
 Execution Time:0.00032806396484375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 550 
 Execution Time:0.0011801719665527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006871223449707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006871223449707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select * from examination where examination_id= '542' and   office_id= '1' 
 Execution Time:0.00060296058654785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 542 
 Execution Time:0.00012803077697754

select * from examination_chargesdetails where  examination_id= '542' 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057101249694824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094985961914062

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094985961914062

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032601356506348

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00063395500183105

SELECT *
FROM `examination`
WHERE `examination_id` = 539 
 Execution Time:0.00065898895263672

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00016188621520996

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00044512748718262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00018787384033203

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00031495094299316

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=539 
 Execution Time:0.00097298622131348

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=539 
 Execution Time:0.00051283836364746

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=539 
 Execution Time:0.00043392181396484

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=539 
 Execution Time:0.00029921531677246

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='539' and office_id='1' 
 Execution Time:0.00086188316345215

select * from examination_chargesdetails where  examination_id= '539' 
 Execution Time:0.00027298927307129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 612 
 Execution Time:0.00016689300537109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 612  and `patient_registration_id` = 548 
 Execution Time:0.00025296211242676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 548 
 Execution Time:0.00086188316345215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 612 
 Execution Time:0.00029706954956055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 612  and `patient_registration_id` = 548 
 Execution Time:0.00034213066101074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 548 
 Execution Time:0.0011618137359619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 612 
 Execution Time:0.00035405158996582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 612  and `patient_registration_id` = 548 
 Execution Time:0.0002288818359375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 548 
 Execution Time:0.00098299980163574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select * from examination where examination_id= '539' and   office_id= '1' 
 Execution Time:0.0010240077972412

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 539 
 Execution Time:0.00029492378234863

select * from examination_chargesdetails where  examination_id= '539' 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075888633728027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075888633728027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 548 
 Execution Time:0.00038719177246094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 612 
 Execution Time:0.00024104118347168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 612  and `patient_registration_id` = 548 
 Execution Time:0.00020289421081543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 548 
 Execution Time:0.0010669231414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select * from examination where examination_id= '539' and   office_id= '1' 
 Execution Time:0.0012531280517578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 539 
 Execution Time:0.00041580200195312

select * from examination_chargesdetails where  examination_id= '539' 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079679489135742

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079679489135742

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097513198852539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 547 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 611 
 Execution Time:0.00050497055053711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 611  and `patient_registration_id` = 547 
 Execution Time:0.00037097930908203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 547 
 Execution Time:0.0013659000396729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select * from examination where examination_id= '538' and   office_id= '1' 
 Execution Time:0.00096416473388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 538 
 Execution Time:0.00049090385437012

select * from examination_chargesdetails where  examination_id= '538' 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 551 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 616 
 Execution Time:0.00030899047851562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 616  and `patient_registration_id` = 551 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003058910369873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 551 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 616 
 Execution Time:0.00037097930908203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 616  and `patient_registration_id` = 551 
 Execution Time:0.00064516067504883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 551 
 Execution Time:0.0011758804321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select * from examination where examination_id= '543' and   office_id= '1' 
 Execution Time:0.00069308280944824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 543 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '543' 
 Execution Time:0.00031685829162598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095200538635254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095200538635254

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069117546081543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069117546081543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0011699199676514

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0011699199676514

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-19' and '2022-03-19' and  patient_registration.office_id= 1      
 Execution Time:0.0039050579071045

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='111' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094008445739746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075411796569824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007929801940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 554 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 619 
 Execution Time:0.00026702880859375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 619  and `patient_registration_id` = 554 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 552 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 617 
 Execution Time:0.00027799606323242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 617  and `patient_registration_id` = 552 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 553 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 618 
 Execution Time:0.00037598609924316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 618  and `patient_registration_id` = 553 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.00043702125549316

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.0027561187744141

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.00043702125549316

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.0027561187744141

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=547  
 Execution Time:0.0013799667358398

select count(*) as cnt from patient_registration where  patient_registration_id= '547' and  office_id= '1' 
 Execution Time:0.00043702125549316

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=547  
 Execution Time:0.0027561187744141

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=547  
 Execution Time:0.0013799667358398

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='547' and  office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092983245849609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092983245849609

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0040478706359863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057411193847656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057411193847656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 552 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 617 
 Execution Time:0.00031900405883789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 617  and `patient_registration_id` = 552 
 Execution Time:0.00063180923461914

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 552 
 Execution Time:0.0015439987182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select * from examination where examination_id= '545' and   office_id= '1' 
 Execution Time:0.00071310997009277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 545 
 Execution Time:0.00063610076904297

select * from examination_chargesdetails where  examination_id= '545' 
 Execution Time:0.0005490779876709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044488906860352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044488906860352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030183792114258

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010051727294922

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013899803161621

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 554 
 Execution Time:0.012856006622314

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 619 
 Execution Time:0.0020880699157715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 619  and `patient_registration_id` = 554 
 Execution Time:0.00080108642578125

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 554 
 Execution Time:0.0022449493408203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select * from examination where examination_id= '544' and   office_id= '1' 
 Execution Time:0.00089001655578613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 544 
 Execution Time:0.0015780925750732

select * from examination_chargesdetails where  examination_id= '544' 
 Execution Time:0.0005037784576416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069880485534668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069880485534668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026988983154297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='111' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.000579833984375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 555 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 620 
 Execution Time:0.00032281875610352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 620  and `patient_registration_id` = 555 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_registration where  patient_registration_id= '553' and  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from patient_registration where  patient_registration_id= '553' and  office_id= '1' 
 Execution Time:0.00034689903259277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=553  
 Execution Time:0.0033271312713623

select count(*) as cnt from patient_registration where  patient_registration_id= '553' and  office_id= '1' 
 Execution Time:0.00034689903259277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=553  
 Execution Time:0.0033271312713623

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=553  
 Execution Time:0.00063419342041016

select count(*) as cnt from patient_registration where  patient_registration_id= '553' and  office_id= '1' 
 Execution Time:0.00034689903259277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=553  
 Execution Time:0.0033271312713623

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=553  
 Execution Time:0.00063419342041016

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='553' and  office_id= '1' 
 Execution Time:0.00020694732666016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00062990188598633

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013418197631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013418197631836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013418197631836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 553 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 618 
 Execution Time:0.00028491020202637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 618  and `patient_registration_id` = 553 
 Execution Time:0.00046801567077637

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 553 
 Execution Time:0.0010838508605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select * from examination where examination_id= '546' and   office_id= '1' 
 Execution Time:0.0011360645294189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 546 
 Execution Time:0.0005030632019043

select * from examination_chargesdetails where  examination_id= '546' 
 Execution Time:0.00023579597473145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039911270141602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039911270141602

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022196769714355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00016307830810547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00012612342834473

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 556 
 Execution Time:0.0012800693511963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from examination where examination_id= '548' and   office_id= '1' 
 Execution Time:0.0010910034179688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 548 
 Execution Time:0.00024509429931641

select * from examination_chargesdetails where  examination_id= '548' 
 Execution Time:0.00034379959106445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0099160671234131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0099160671234131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0099160671234131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 553 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 618 
 Execution Time:0.00018310546875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 618  and `patient_registration_id` = 553 
 Execution Time:0.0002739429473877

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 553 
 Execution Time:0.0012571811676025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012679100036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012679100036621

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082302093505859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082302093505859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from examination where examination_id= '546' and   office_id= '1' 
 Execution Time:0.00096702575683594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 546 
 Execution Time:0.00048303604125977

select * from examination_chargesdetails where  examination_id= '546' 
 Execution Time:0.00032901763916016

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007779598236084

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='111' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062394142150879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086617469787598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086617469787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086617469787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086617469787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.00058603286743164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00041317939758301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00036096572875977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 556 
 Execution Time:0.0015389919281006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093817710876465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093817710876465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select * from examination where examination_id= '548' and   office_id= '1' 
 Execution Time:0.00072813034057617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 548 
 Execution Time:0.00050806999206543

select * from examination_chargesdetails where  examination_id= '548' 
 Execution Time:0.00035405158996582

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0024900436401367

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087499618530273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 555 
 Execution Time:0.00073909759521484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 620 
 Execution Time:0.00051784515380859

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 620  and `patient_registration_id` = 555 
 Execution Time:0.00025200843811035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 555 
 Execution Time:0.0013489723205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091719627380371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091719627380371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.003715991973877

select * from examination where examination_id= '547' and   office_id= '1' 
 Execution Time:0.0013740062713623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 547 
 Execution Time:0.00052309036254883

select * from examination_chargesdetails where  examination_id= '547' 
 Execution Time:0.00050997734069824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025489330291748

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025489330291748

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001492977142334

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00090312957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020859241485596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020859241485596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015609264373779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013430118560791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020859241485596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011289119720459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011289119720459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011289119720459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017619132995605

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013408660888672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013408660888672

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 553 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 618 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 618  and `patient_registration_id` = 553 
 Execution Time:0.00097084045410156

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 553 
 Execution Time:0.0012028217315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016050338745117

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016050338745117

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012578964233398

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012578964233398

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select * from examination where examination_id= '546' and   office_id= '1' 
 Execution Time:0.0010221004486084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 546 
 Execution Time:0.0012640953063965

select * from examination_chargesdetails where  examination_id= '546' 
 Execution Time:0.0010988712310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 552 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 617 
 Execution Time:0.00029993057250977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 617  and `patient_registration_id` = 552 
 Execution Time:0.00072813034057617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 552 
 Execution Time:0.0013041496276855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.009005069732666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.009005069732666

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select * from examination where examination_id= '545' and   office_id= '1' 
 Execution Time:0.0010490417480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 545 
 Execution Time:0.00060486793518066

select * from examination_chargesdetails where  examination_id= '545' 
 Execution Time:0.0003359317779541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.00045418739318848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00025296211242676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00051188468933105

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 556 
 Execution Time:0.0012390613555908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.010668992996216

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.010668992996216

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from examination where examination_id= '548' and   office_id= '1' 
 Execution Time:0.00080204010009766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 548 
 Execution Time:0.00024795532226562

select * from examination_chargesdetails where  examination_id= '548' 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072312355041504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019080638885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072312355041504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077986717224121

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077986717224121

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011320114135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011320114135742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015108585357666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011320114135742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015108585357666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 622 
 Execution Time:0.00021600723266602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 622  and `patient_registration_id` = 557 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 558 
 Execution Time:0.00022387504577637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 623 
 Execution Time:0.00018501281738281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 623  and `patient_registration_id` = 558 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '471' and  office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from patient_registration where  patient_registration_id= '471' and  office_id= '1' 
 Execution Time:0.00036811828613281

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=471  
 Execution Time:0.0026578903198242

select count(*) as cnt from patient_registration where  patient_registration_id= '471' and  office_id= '1' 
 Execution Time:0.00036811828613281

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=471  
 Execution Time:0.0026578903198242

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=471  
 Execution Time:0.00076889991760254

select count(*) as cnt from patient_registration where  patient_registration_id= '471' and  office_id= '1' 
 Execution Time:0.00036811828613281

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=471  
 Execution Time:0.0026578903198242

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=471  
 Execution Time:0.00076889991760254

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='471' and  office_id= '1' 
 Execution Time:0.00019001960754395

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_appointment where  patient_registration_id = 471 and appointment_date= '2022-03-19' 
 Execution Time:0.00055694580078125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 471 
 Execution Time:0.00028705596923828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 625 
 Execution Time:0.00035595893859863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 625  and `patient_registration_id` = 471 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 471 
 Execution Time:0.00057387351989746

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 625 
 Execution Time:0.00037598609924316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 625  and `patient_registration_id` = 471 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019910335540771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.007565975189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026569366455078

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070405006408691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031113624572754

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.0001671314239502

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074982643127441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013771057128906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074982643127441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013771057128906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030450820922852

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030450820922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030450820922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030450820922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 471 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 625 
 Execution Time:0.00023984909057617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 625  and `patient_registration_id` = 471 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052213668823242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052213668823242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.00016903877258301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.00028586387634277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 559 
 Execution Time:0.00086593627929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087189674377441

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087189674377441

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from examination where examination_id= '551' and   office_id= '1' 
 Execution Time:0.0011179447174072

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 551 
 Execution Time:0.00056099891662598

select * from examination_chargesdetails where  examination_id= '551' 
 Execution Time:0.00038504600524902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 471 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 625 
 Execution Time:0.00041604042053223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 625  and `patient_registration_id` = 471 
 Execution Time:0.00045108795166016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 471 
 Execution Time:0.0015268325805664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select * from examination where examination_id= '552' and   office_id= '1' 
 Execution Time:0.0010099411010742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 552 
 Execution Time:0.00054693222045898

select * from examination_chargesdetails where  examination_id= '552' 
 Execution Time:0.00044393539428711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011098384857178

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 560 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 626 
 Execution Time:0.0003969669342041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 626  and `patient_registration_id` = 560 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065898895263672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065898895263672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025415420532227

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013031959533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013031959533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013031959533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.00076103210449219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.00049114227294922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.0010168552398682

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 559 
 Execution Time:0.0021359920501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011558532714844

select * from examination where examination_id= '551' and   office_id= '1' 
 Execution Time:0.00060606002807617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 551 
 Execution Time:0.00070285797119141

select * from examination_chargesdetails where  examination_id= '551' 
 Execution Time:0.0010969638824463

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035429000854492

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035429000854492

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078821182250977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078821182250977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017378330230713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017378330230713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062394142150879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017378330230713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.00047397613525391

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.00035285949707031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 559 
 Execution Time:0.00095391273498535

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from examination where examination_id= '551' and   office_id= '1' 
 Execution Time:0.001427173614502

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 551 
 Execution Time:0.00054287910461426

select * from examination_chargesdetails where  examination_id= '551' 
 Execution Time:0.00032305717468262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010240077972412

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010240077972412

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011050701141357

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011050701141357

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0055398941040039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0055398941040039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039141178131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0055398941040039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084614753723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013802051544189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084614753723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013802051544189

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 550 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 615 
 Execution Time:0.00030994415283203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 615  and `patient_registration_id` = 550 
 Execution Time:0.00025510787963867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 550 
 Execution Time:0.0016300678253174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 550 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 615 
 Execution Time:0.00023794174194336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 615  and `patient_registration_id` = 550 
 Execution Time:0.00033283233642578

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 550 
 Execution Time:0.0012750625610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005338191986084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005338191986084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select * from examination where examination_id= '542' and   office_id= '1' 
 Execution Time:0.00085115432739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 542 
 Execution Time:0.0004889965057373

select * from examination_chargesdetails where  examination_id= '542' 
 Execution Time:0.00039911270141602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.00026297569274902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.0001990795135498

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 559 
 Execution Time:0.00086617469787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from examination where examination_id= '551' and   office_id= '1' 
 Execution Time:0.00081014633178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 551 
 Execution Time:0.00033903121948242

select * from examination_chargesdetails where  examination_id= '551' 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025486946105957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 559 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 624 
 Execution Time:0.00016403198242188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 624  and `patient_registration_id` = 559 
 Execution Time:0.00013184547424316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 559 
 Execution Time:0.00077915191650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015468597412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015468597412109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002741813659668

select * from examination where examination_id= '551' and   office_id= '1' 
 Execution Time:0.0011699199676514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 551 
 Execution Time:0.00035309791564941

select * from examination_chargesdetails where  examination_id= '551' 
 Execution Time:0.00038981437683105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 560 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 626 
 Execution Time:0.00015592575073242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 626  and `patient_registration_id` = 560 
 Execution Time:0.0001227855682373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015041828155518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 561 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 627 
 Execution Time:0.00020694732666016

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 627  and `patient_registration_id` = 561 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002453088760376

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002453088760376

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 562 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 628 
 Execution Time:0.00026607513427734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 628  and `patient_registration_id` = 562 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091218948364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091218948364258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038480758666992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038480758666992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 562 
 Execution Time:0.00032186508178711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 628 
 Execution Time:0.00024700164794922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 628  and `patient_registration_id` = 562 
 Execution Time:0.00028610229492188

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 562 
 Execution Time:0.0013749599456787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061321258544922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061321258544922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056920051574707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from examination where examination_id= '555' and   office_id= '1' 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 555 
 Execution Time:0.00024700164794922

select * from examination_chargesdetails where  examination_id= '555' 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070786476135254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070786476135254

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030820369720459

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00053691864013672

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=562  
 Execution Time:0.0027439594268799

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00053691864013672

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=562  
 Execution Time:0.0027439594268799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=562  
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00053691864013672

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=562  
 Execution Time:0.0027439594268799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=562  
 Execution Time:0.00052094459533691

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='562' and  office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087690353393555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087690353393555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 560 
 Execution Time:0.0003511905670166

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 626 
 Execution Time:0.00025296211242676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 626  and `patient_registration_id` = 560 
 Execution Time:0.00062704086303711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 560 
 Execution Time:0.0013329982757568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select * from examination where examination_id= '553' and   office_id= '1' 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 553 
 Execution Time:0.00024199485778809

select * from examination_chargesdetails where  examination_id= '553' 
 Execution Time:0.00019216537475586

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 561 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 627 
 Execution Time:0.0002591609954834

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 627  and `patient_registration_id` = 561 
 Execution Time:0.00050592422485352

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 561 
 Execution Time:0.001615047454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '554' and   office_id= '1' 
 Execution Time:0.00059819221496582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 554 
 Execution Time:0.00020313262939453

select * from examination_chargesdetails where  examination_id= '554' 
 Execution Time:0.00029492378234863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058317184448242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065398216247559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 565 
 Execution Time:0.0028398036956787

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 631 
 Execution Time:0.00054001808166504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 631  and `patient_registration_id` = 565 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005958080291748

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005958080291748

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095009803771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095009803771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013082027435303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095009803771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013082027435303

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071096420288086

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00037384033203125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00031089782714844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00071406364440918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.0014951229095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.0010769367218018

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 563 
 Execution Time:0.00025415420532227

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 629 
 Execution Time:0.00021696090698242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 629  and `patient_registration_id` = 563 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 565 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 631 
 Execution Time:0.0002899169921875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 631  and `patient_registration_id` = 565 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 565 
 Execution Time:0.0014400482177734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from examination where examination_id= '556' and   office_id= '1' 
 Execution Time:0.00075507164001465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 556 
 Execution Time:0.0003669261932373

select * from examination_chargesdetails where  examination_id= '556' 
 Execution Time:0.00035309791564941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085186958312988

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011310577392578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00067901611328125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00043797492980957

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00037193298339844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 564 
 Execution Time:0.0013561248779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085687637329102

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085687637329102

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010550022125244

select * from examination where examination_id= '557' and   office_id= '1' 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 557 
 Execution Time:0.0004270076751709

select * from examination_chargesdetails where  examination_id= '557' 
 Execution Time:0.0005040168762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084710121154785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084710121154785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 558 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 623 
 Execution Time:0.00024604797363281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 623  and `patient_registration_id` = 558 
 Execution Time:0.0002439022064209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 558 
 Execution Time:0.0016059875488281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029301643371582

select * from examination where examination_id= '550' and   office_id= '1' 
 Execution Time:0.00091290473937988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0099709033966064

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 550 
 Execution Time:0.00052690505981445

select * from examination_chargesdetails where  examination_id= '550' 
 Execution Time:0.00041389465332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 622 
 Execution Time:0.00027298927307129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 622  and `patient_registration_id` = 557 
 Execution Time:0.00039911270141602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 557 
 Execution Time:0.0013940334320068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082111358642578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082111358642578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049209594726562

select * from examination where examination_id= '549' and   office_id= '1' 
 Execution Time:0.0032370090484619

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 549 
 Execution Time:0.00056004524230957

select * from examination_chargesdetails where  examination_id= '549' 
 Execution Time:0.00047588348388672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083088874816895

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083088874816895

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016021728515625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016021728515625

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016021728515625

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 566 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 632 
 Execution Time:0.001723051071167

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 632  and `patient_registration_id` = 566 
 Execution Time:0.0018439292907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 566 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 632 
 Execution Time:0.00031685829162598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 632  and `patient_registration_id` = 566 
 Execution Time:0.00021481513977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040721893310547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040721893310547

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029683113098145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00067281723022461

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00053191184997559

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 564 
 Execution Time:0.0016899108886719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select * from examination where examination_id= '557' and   office_id= '1' 
 Execution Time:0.00055408477783203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 557 
 Execution Time:0.00023007392883301

select * from examination_chargesdetails where  examination_id= '557' 
 Execution Time:0.00035214424133301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087499618530273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087499618530273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093913078308105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093913078308105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018119812011719

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00038909912109375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00037503242492676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 564 
 Execution Time:0.0011119842529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00028586387634277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.00061202049255371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 564 
 Execution Time:0.0013198852539062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from examination where examination_id= '557' and   office_id= '1' 
 Execution Time:0.00084590911865234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 557 
 Execution Time:0.00052809715270996

select * from examination_chargesdetails where  examination_id= '557' 
 Execution Time:0.00035691261291504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013391971588135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013391971588135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013391971588135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010139942169189

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 564 
 Execution Time:0.00025320053100586

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 630 
 Execution Time:0.00016593933105469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 630  and `patient_registration_id` = 564 
 Execution Time:0.0001988410949707

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 564 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select * from examination where examination_id= '557' and   office_id= '1' 
 Execution Time:0.00111985206604

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 557 
 Execution Time:0.00029277801513672

select * from examination_chargesdetails where  examination_id= '557' 
 Execution Time:0.00041604042053223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077319145202637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077319145202637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030183792114258

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0013060569763184

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0013060569763184

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-19' and '2022-03-19' and  patient_registration.office_id= 1      
 Execution Time:0.004364013671875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 563 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 629 
 Execution Time:0.0002138614654541

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 629  and `patient_registration_id` = 563 
 Execution Time:0.0004580020904541

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 563 
 Execution Time:0.0010061264038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select * from examination where examination_id= '558' and   office_id= '1' 
 Execution Time:0.00088286399841309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 558 
 Execution Time:0.00039196014404297

select * from examination_chargesdetails where  examination_id= '558' 
 Execution Time:0.0002439022064209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002741813659668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054621696472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054621696472168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054621696472168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00064492225646973

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00064492225646973

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032901763916016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 567 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 633 
 Execution Time:0.00019502639770508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 633  and `patient_registration_id` = 567 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069022178649902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069022178649902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001101016998291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044012069702148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044012069702148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 563 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 629 
 Execution Time:0.00017595291137695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 629  and `patient_registration_id` = 563 
 Execution Time:0.0003659725189209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 563 
 Execution Time:0.0012450218200684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046682357788086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046682357788086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027999877929688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027999877929688

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select * from examination where examination_id= '558' and   office_id= '1' 
 Execution Time:0.00068902969360352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 558 
 Execution Time:0.00052785873413086

select * from examination_chargesdetails where  examination_id= '558' 
 Execution Time:0.00046992301940918

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='15' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00095391273498535

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 567 
 Execution Time:0.00038480758666992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 633 
 Execution Time:0.0005340576171875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 633  and `patient_registration_id` = 567 
 Execution Time:0.0003960132598877

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 567 
 Execution Time:0.00097799301147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089788436889648

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089788436889648

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010299682617188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010299682617188

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select * from examination where examination_id= '560' and   office_id= '1' 
 Execution Time:0.00087189674377441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 560 
 Execution Time:0.00071907043457031

select * from examination_chargesdetails where  examination_id= '560' 
 Execution Time:0.00033283233642578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010809898376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014469623565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014469623565674

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011208057403564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011208057403564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011208057403564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011208057403564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0018060207366943

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0018060207366943

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-19' and '2022-03-19' and  patient_registration.office_id= 1      
 Execution Time:0.0085129737854004

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 568 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 634 
 Execution Time:0.00017905235290527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 634  and `patient_registration_id` = 568 
 Execution Time:0.00026082992553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030183792114258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030183792114258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024986267089844

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='61' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093579292297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020313262939453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 569 
 Execution Time:0.00026679039001465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 635 
 Execution Time:0.00025701522827148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 635  and `patient_registration_id` = 569 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010261535644531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010261535644531

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062394142150879

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043392181396484

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00037980079650879

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0028948783874512

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00037980079650879

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0028948783874512

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=567  
 Execution Time:0.00079894065856934

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00037980079650879

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0028948783874512

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=567  
 Execution Time:0.00079894065856934

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='567' and  office_id= '1' 
 Execution Time:0.00032281875610352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 566 
 Execution Time:0.00024104118347168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 632 
 Execution Time:0.00016093254089355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 632  and `patient_registration_id` = 566 
 Execution Time:0.0002281665802002

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 566 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from examination where examination_id= '559' and   office_id= '1' 
 Execution Time:0.00059318542480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 559 
 Execution Time:0.00033402442932129

select * from examination_chargesdetails where  examination_id= '559' 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051021575927734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051021575927734

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00051522254943848

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00051522254943848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=564  
 Execution Time:0.0017859935760498

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00051522254943848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=564  
 Execution Time:0.0017859935760498

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=564  
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00051522254943848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=564  
 Execution Time:0.0017859935760498

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=564  
 Execution Time:0.00048398971557617

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='564' and  office_id= '1' 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0016279220581055

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0016279220581055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=567  
 Execution Time:0.00081992149353027

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=567  
 Execution Time:0.0016279220581055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=567  
 Execution Time:0.00081992149353027

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='567' and  office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0052018165588379

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0052018165588379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0052018165588379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0052018165588379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 570 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 636 
 Execution Time:0.00019288063049316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 636  and `patient_registration_id` = 570 
 Execution Time:0.00015807151794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031113624572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017411708831787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007469654083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017411708831787

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025458335876465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015721321105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015721321105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065183639526367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065183639526367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065183639526367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015151500701904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015151500701904

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 570 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 636 
 Execution Time:0.00020909309387207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 636  and `patient_registration_id` = 570 
 Execution Time:0.00034689903259277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 570 
 Execution Time:0.00086212158203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012819766998291

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012819766998291

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select * from examination where examination_id= '563' and   office_id= '1' 
 Execution Time:0.0010931491851807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 563 
 Execution Time:0.00031399726867676

select * from examination_chargesdetails where  examination_id= '563' 
 Execution Time:0.0018861293792725

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018479824066162

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018479824066162

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0004570484161377

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078082084655762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078082084655762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078082084655762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010840892791748

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011260509490967

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 571 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 637 
 Execution Time:0.00024795532226562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 637  and `patient_registration_id` = 571 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011131763458252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011131763458252

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0014939308166504

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-19' and  '2022-03-19' and  billing_master.office_id= 1        
 Execution Time:0.0014939308166504

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-19' and '2022-03-19' and  patient_registration.office_id= 1      
 Execution Time:0.010794878005981

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010228157043457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010228157043457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010228157043457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 574 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 640 
 Execution Time:0.00048494338989258

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 640  and `patient_registration_id` = 574 
 Execution Time:0.00085306167602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001777172088623

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001777172088623

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00049090385437012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 622 
 Execution Time:0.00034904479980469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 622  and `patient_registration_id` = 557 
 Execution Time:0.00031590461730957

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 557 
 Execution Time:0.0010671615600586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select * from examination where examination_id= '549' and   office_id= '1' 
 Execution Time:0.00089597702026367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 549 
 Execution Time:0.0010020732879639

select * from examination_chargesdetails where  examination_id= '549' 
 Execution Time:0.0011918544769287

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055789947509766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055789947509766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030431747436523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030431747436523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `examination`
WHERE `examination_id` = 549 
 Execution Time:0.0011329650878906

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0017640590667725

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00073695182800293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0049829483032227

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=549 
 Execution Time:0.0013611316680908

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=549 
 Execution Time:0.0024170875549316

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=549 
 Execution Time:0.0009148120880127

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=549 
 Execution Time:0.00023794174194336

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='549' and office_id='1' 
 Execution Time:0.00087594985961914

select * from examination_chargesdetails where  examination_id= '549' 
 Execution Time:0.00022006034851074

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00060510635375977

SELECT *
FROM `examination`
WHERE `examination_id` = 549 
 Execution Time:0.0004889965057373

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00016903877258301

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00015711784362793

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00022697448730469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=549 
 Execution Time:0.0011210441589355

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=549 
 Execution Time:0.00094103813171387

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=549 
 Execution Time:0.00049996376037598

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=549 
 Execution Time:0.00043201446533203

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='549' and office_id='1' 
 Execution Time:0.0010747909545898

select * from examination_chargesdetails where  examination_id= '549' 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00041913986206055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00046277046203613

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 556 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

select * from examination where examination_id= '548' and   office_id= '1' 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 548 
 Execution Time:0.00023102760314941

select * from examination_chargesdetails where  examination_id= '548' 
 Execution Time:0.00023293495178223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 556 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 621 
 Execution Time:0.00017499923706055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 621  and `patient_registration_id` = 556 
 Execution Time:0.00027990341186523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 556 
 Execution Time:0.0010848045349121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from examination where examination_id= '548' and   office_id= '1' 
 Execution Time:0.00095605850219727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 548 
 Execution Time:0.00025010108947754

select * from examination_chargesdetails where  examination_id= '548' 
 Execution Time:0.00023794174194336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005950927734375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005950927734375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045013427734375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045013427734375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 557 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 622 
 Execution Time:0.00036406517028809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 622  and `patient_registration_id` = 557 
 Execution Time:0.0003659725189209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 557 
 Execution Time:0.001554012298584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from examination where examination_id= '549' and   office_id= '1' 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 549 
 Execution Time:0.00023388862609863

select * from examination_chargesdetails where  examination_id= '549' 
 Execution Time:0.00029516220092773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 558 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 623 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 623  and `patient_registration_id` = 558 
 Execution Time:0.00026702880859375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 558 
 Execution Time:0.0010430812835693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select * from examination where examination_id= '550' and   office_id= '1' 
 Execution Time:0.00098586082458496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 550 
 Execution Time:0.00049090385437012

select * from examination_chargesdetails where  examination_id= '550' 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044989585876465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044989585876465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 568 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 634 
 Execution Time:0.00029611587524414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 634  and `patient_registration_id` = 568 
 Execution Time:0.00024199485778809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 568 
 Execution Time:0.0013649463653564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029311180114746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029311180114746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037310123443604

select * from examination where examination_id= '561' and   office_id= '1' 
 Execution Time:0.0041520595550537

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041108131408691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 561 
 Execution Time:0.0037531852722168

select * from examination_chargesdetails where  examination_id= '561' 
 Execution Time:0.0010080337524414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051617622375488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 569 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 635 
 Execution Time:0.00017094612121582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 635  and `patient_registration_id` = 569 
 Execution Time:0.00032711029052734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 569 
 Execution Time:0.00077605247497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from examination where examination_id= '562' and   office_id= '1' 
 Execution Time:0.0034589767456055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021839141845703

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 562 
 Execution Time:0.0031530857086182

select * from examination_chargesdetails where  examination_id= '562' 
 Execution Time:0.0025711059570312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00341796875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00341796875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029590129852295

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038490295410156

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038490295410156

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095701217651367

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 569 
 Execution Time:0.00059199333190918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 635 
 Execution Time:0.00054001808166504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 635  and `patient_registration_id` = 569 
 Execution Time:0.00043106079101562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 569 
 Execution Time:0.0018060207366943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select * from examination where examination_id= '562' and   office_id= '1' 
 Execution Time:0.00075387954711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 562 
 Execution Time:0.00029516220092773

select * from examination_chargesdetails where  examination_id= '562' 
 Execution Time:0.00028300285339355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 569 
 Execution Time:0.000640869140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 635 
 Execution Time:0.00059103965759277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 635  and `patient_registration_id` = 569 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 569 
 Execution Time:0.0011780261993408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select * from examination where examination_id= '562' and   office_id= '1' 
 Execution Time:0.00069785118103027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 562 
 Execution Time:0.00040602684020996

select * from examination_chargesdetails where  examination_id= '562' 
 Execution Time:0.00029516220092773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088691711425781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088691711425781

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026988983154297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 569 
 Execution Time:0.00036287307739258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 635 
 Execution Time:0.00036096572875977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 635  and `patient_registration_id` = 569 
 Execution Time:0.00022292137145996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 569 
 Execution Time:0.0014910697937012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '562' and   office_id= '1' 
 Execution Time:0.00094485282897949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 562 
 Execution Time:0.00026798248291016

select * from examination_chargesdetails where  examination_id= '562' 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023050308227539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023050308227539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023198127746582


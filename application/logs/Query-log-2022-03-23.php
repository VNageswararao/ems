select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029828548431396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029828548431396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027189254760742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029828548431396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0011780261993408

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0011780261993408

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0018959045410156

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0011780261993408

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0018959045410156

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=563  
 Execution Time:0.0009000301361084

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0011780261993408

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0018959045410156

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=563  
 Execution Time:0.0009000301361084

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='563' and  office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013651847839355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013651847839355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_appointment where  patient_registration_id = 563 and appointment_date= '2022-03-23' 
 Execution Time:0.0006868839263916

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.00063085556030273

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.00063085556030273

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0033349990844727

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.00063085556030273

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0033349990844727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=232  
 Execution Time:0.00074601173400879

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.00063085556030273

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0033349990844727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=232  
 Execution Time:0.00074601173400879

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='232' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030269622802734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030269622802734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.0002601146697998

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0024509429931641

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.0002601146697998

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0024509429931641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=232  
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_registration where  patient_registration_id= '232' and  office_id= '1' 
 Execution Time:0.0002601146697998

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=232  
 Execution Time:0.0024509429931641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=232  
 Execution Time:0.00047707557678223

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='232' and  office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022430419921875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022430419921875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018301010131836

select count(*) as cnt from patient_appointment where  patient_registration_id = 232 and appointment_date= '2022-03-23' 
 Execution Time:0.001060962677002

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.012840986251831

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.012840986251831

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049939155578613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.012840986251831

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049939155578613

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.012840986251831

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049939155578613

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 563 
 Execution Time:0.00083494186401367

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 700 
 Execution Time:0.00033807754516602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 700  and `patient_registration_id` = 563 
 Execution Time:0.0020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0071721076965332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0071721076965332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.012471914291382

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 701 
 Execution Time:0.00064301490783691

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 701  and `patient_registration_id` = 232 
 Execution Time:0.00055909156799316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002140998840332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 701 
 Execution Time:0.00024104118347168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 701  and `patient_registration_id` = 232 
 Execution Time:0.0003809928894043

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 232 
 Execution Time:0.0011029243469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092697143554688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092697143554688

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036883354187012

select * from examination where examination_id= '623' and   office_id= '1' 
 Execution Time:0.00082612037658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 623 
 Execution Time:0.0022499561309814

select * from examination_chargesdetails where  examination_id= '623' 
 Execution Time:0.0022249221801758

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026898384094238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026898384094238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0030379295349121

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057697296142578

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088691711425781

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088310241699219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022881031036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022881031036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063514709472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from patient_registration where  patient_registration_id= '438' and  office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_registration where  patient_registration_id= '438' and  office_id= '1' 
 Execution Time:0.0005791187286377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=438  
 Execution Time:0.0042910575866699

select count(*) as cnt from patient_registration where  patient_registration_id= '438' and  office_id= '1' 
 Execution Time:0.0005791187286377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=438  
 Execution Time:0.0042910575866699

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=438  
 Execution Time:0.0014920234680176

select count(*) as cnt from patient_registration where  patient_registration_id= '438' and  office_id= '1' 
 Execution Time:0.0005791187286377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=438  
 Execution Time:0.0042910575866699

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=438  
 Execution Time:0.0014920234680176

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='438' and  office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056290626525879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from patient_appointment where  patient_registration_id = 438 and appointment_date= '2022-03-23' 
 Execution Time:0.00075101852416992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 623 
 Execution Time:0.00070500373840332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 702 
 Execution Time:0.00059700012207031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 702  and `patient_registration_id` = 623 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017468929290771

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017468929290771

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003201961517334

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 703 
 Execution Time:0.00021004676818848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 703  and `patient_registration_id` = 438 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002598762512207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 623 
 Execution Time:0.00046515464782715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 702 
 Execution Time:0.00087308883666992

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 702  and `patient_registration_id` = 623 
 Execution Time:0.0004420280456543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 623 
 Execution Time:0.0020859241485596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007939338684082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007939338684082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select * from examination where examination_id= '624' and   office_id= '1' 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 624 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '624' 
 Execution Time:0.00049805641174316

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010569095611572

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066876411437988

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084996223449707

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='15' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065803527832031

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081086158752441

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014128684997559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018031597137451

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018031597137451

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018031597137451

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.0016419887542725

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 703 
 Execution Time:0.0015439987182617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 703  and `patient_registration_id` = 438 
 Execution Time:0.00093698501586914

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 438 
 Execution Time:0.0027620792388916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select * from examination where examination_id= '625' and   office_id= '1' 
 Execution Time:0.0014069080352783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012378692626953

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 625 
 Execution Time:0.0014209747314453

select * from examination_chargesdetails where  examination_id= '625' 
 Execution Time:0.00081682205200195

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009770393371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009770393371582

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031321048736572

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031321048736572

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078177452087402

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0053999423980713

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001133918762207

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037622451782227

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001162052154541

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0037970542907715

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016930103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016930103302002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016930103302002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022568702697754

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00039505958557129

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0032060146331787

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00039505958557129

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0032060146331787

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=41  
 Execution Time:0.00092005729675293

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00039505958557129

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0032060146331787

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=41  
 Execution Time:0.00092005729675293

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='41' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076484680175781

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076484680175781

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from patient_appointment where  patient_registration_id = 41 and appointment_date= '2022-03-23' 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003026008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012438297271729

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0027070045471191

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0027070045471191

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.00077390670776367

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0027070045471191

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.00077390670776367

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='613' and  office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055909156799316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from patient_appointment where  patient_registration_id = 613 and appointment_date= '2022-03-23' 
 Execution Time:0.0011529922485352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 563 
 Execution Time:0.00055193901062012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 700 
 Execution Time:0.00050902366638184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 700  and `patient_registration_id` = 563 
 Execution Time:0.00046420097351074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 563 
 Execution Time:0.00148606300354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074315071105957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074315071105957

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from examination where examination_id= '622' and   office_id= '1' 
 Execution Time:0.00093412399291992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 622 
 Execution Time:0.00065517425537109

select * from examination_chargesdetails where  examination_id= '622' 
 Execution Time:0.00084900856018066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010631084442139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010631084442139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016109943389893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010631084442139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016109943389893

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='60' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012578964233398

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0051338672637939

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051379203796387

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062298774719238

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='103' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045299530029297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014438629150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014438629150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014438629150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014438629150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014438629150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0004570484161377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0037829875946045

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0004570484161377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0037829875946045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=563  
 Execution Time:0.0013000965118408

select count(*) as cnt from patient_registration where  patient_registration_id= '563' and  office_id= '1' 
 Execution Time:0.0004570484161377

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=563  
 Execution Time:0.0037829875946045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=563  
 Execution Time:0.0013000965118408

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='563' and  office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007479190826416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007479190826416

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select * from investigation where  investigation_id=27  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 624 
 Execution Time:0.00025081634521484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 706 
 Execution Time:0.00046277046203613

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 706  and `patient_registration_id` = 624 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061416625976562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061416625976562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00076198577880859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 704 
 Execution Time:0.00040912628173828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 704  and `patient_registration_id` = 41 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 613 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 705 
 Execution Time:0.00047707557678223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 705  and `patient_registration_id` = 613 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select * from investigation where  investigation_id=25  and office_id= 1 and status=1 
 Execution Time:0.00094485282897949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093483924865723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093483924865723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093483924865723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 613 
 Execution Time:0.00052189826965332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 705 
 Execution Time:0.00029993057250977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 705  and `patient_registration_id` = 613 
 Execution Time:0.00035715103149414

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 613 
 Execution Time:0.0016148090362549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select * from examination where examination_id= '628' and   office_id= '1' 
 Execution Time:0.0010418891906738

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 628 
 Execution Time:0.00053882598876953

select * from examination_chargesdetails where  examination_id= '628' 
 Execution Time:0.00057387351989746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014960765838623

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014960765838623

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0066609382629395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 624 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 706 
 Execution Time:0.0002901554107666

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 706  and `patient_registration_id` = 624 
 Execution Time:0.00035500526428223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 624 
 Execution Time:0.0021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select * from examination where examination_id= '626' and   office_id= '1' 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 626 
 Execution Time:0.00027585029602051

select * from examination_chargesdetails where  examination_id= '626' 
 Execution Time:0.00018000602722168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027012825012207

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055408477783203

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085282325744629

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087094306945801

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037908554077148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036108493804932

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036108493804932

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030829906463623

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036108493804932

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030829906463623

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 624 
 Execution Time:0.0037939548492432

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 706 
 Execution Time:0.0038490295410156

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 706  and `patient_registration_id` = 624 
 Execution Time:0.0037779808044434

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 624 
 Execution Time:0.0039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029380321502686

select * from examination where examination_id= '626' and   office_id= '1' 
 Execution Time:0.0039350986480713

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014700889587402

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 626 
 Execution Time:0.0013771057128906

select * from examination_chargesdetails where  examination_id= '626' 
 Execution Time:0.0039501190185547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016109943389893

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016109943389893

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0025451183319092

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 704 
 Execution Time:0.0018289089202881

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 704  and `patient_registration_id` = 41 
 Execution Time:0.0033550262451172

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 41 
 Execution Time:0.0068888664245605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050783157348633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select * from examination where examination_id= '627' and   office_id= '1' 
 Execution Time:0.0018949508666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078320503234863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 627 
 Execution Time:0.00040006637573242

select * from examination_chargesdetails where  examination_id= '627' 
 Execution Time:0.00045108795166016

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.005418062210083

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0033869743347168

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0037322044372559

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088095664978027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 613 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 705 
 Execution Time:0.00049781799316406

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 705  and `patient_registration_id` = 613 
 Execution Time:0.00057101249694824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 613 
 Execution Time:0.0019018650054932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from examination where examination_id= '628' and   office_id= '1' 
 Execution Time:0.0011091232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 628 
 Execution Time:0.0021989345550537

select * from examination_chargesdetails where  examination_id= '628' 
 Execution Time:0.00055193901062012

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009620189666748

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058603286743164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089502334594727

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0080568790435791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0080568790435791

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0019221305847168

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0019221305847168

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0058159828186035

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0019221305847168

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0058159828186035

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0013341903686523

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0019221305847168

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0058159828186035

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0013341903686523

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='613' and  office_id= '1' 
 Execution Time:0.010596990585327

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0021989345550537

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 704 
 Execution Time:0.00046300888061523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 704  and `patient_registration_id` = 41 
 Execution Time:0.00042891502380371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 41 
 Execution Time:0.0015928745269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select * from examination where examination_id= '627' and   office_id= '1' 
 Execution Time:0.0045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 627 
 Execution Time:0.0038528442382812

select * from examination_chargesdetails where  examination_id= '627' 
 Execution Time:0.0032758712768555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.010502099990845

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.010502099990845

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034859180450439

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0047500133514404

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0047500133514404

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0068070888519287

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022358894348145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022358894348145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093913078308105

select * from investigation where  investigation_id=5  and office_id= 1 and status=1 
 Execution Time:0.0027592182159424

select * from investigation where  investigation_id=27  and office_id= 1 and status=1 
 Execution Time:0.00075888633728027

select * from investigation where  investigation_id=25  and office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0037240982055664

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0037240982055664

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00044393539428711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0030510425567627

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00044393539428711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0030510425567627

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=41  
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_registration where  patient_registration_id= '41' and  office_id= '1' 
 Execution Time:0.00044393539428711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=41  
 Execution Time:0.0030510425567627

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=41  
 Execution Time:0.00049304962158203

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='41' and  office_id= '1' 
 Execution Time:0.00019598007202148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016171932220459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016171932220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016171932220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00054192543029785

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0033550262451172

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00054192543029785

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0033550262451172

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0011241436004639

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00054192543029785

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0033550262451172

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0011241436004639

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='613' and  office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0028948783874512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0014750957489014

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0014750957489014

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0034389495849609

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0014750957489014

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0034389495849609

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0013198852539062

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.0014750957489014

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=613  
 Execution Time:0.0034389495849609

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=613  
 Execution Time:0.0013198852539062

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='613' and  office_id= '1' 
 Execution Time:0.0036721229553223

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.023822069168091

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.023822069168091

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.0012381076812744

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0010771751403809

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0010771751403809

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031390190124512

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031390190124512

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 624 
 Execution Time:0.0006568431854248

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 706 
 Execution Time:0.00093197822570801

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 706  and `patient_registration_id` = 624 
 Execution Time:0.00050902366638184

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 624 
 Execution Time:0.0019450187683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023200511932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023200511932373

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0073339939117432

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013329982757568

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013329982757568

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select * from examination where examination_id= '626' and   office_id= '1' 
 Execution Time:0.0012369155883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 626 
 Execution Time:0.0017271041870117

select * from examination_chargesdetails where  examination_id= '626' 
 Execution Time:0.0010340213775635

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0023689270019531

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079917907714844

select count(*) as cnt from patient_registration where  patient_registration_id= '611' and  office_id= '1' 
 Execution Time:0.00073504447937012

select count(*) as cnt from patient_registration where  patient_registration_id= '611' and  office_id= '1' 
 Execution Time:0.00073504447937012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=611  
 Execution Time:0.0028970241546631

select count(*) as cnt from patient_registration where  patient_registration_id= '611' and  office_id= '1' 
 Execution Time:0.00073504447937012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=611  
 Execution Time:0.0028970241546631

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=611  
 Execution Time:0.0010371208190918

select count(*) as cnt from patient_registration where  patient_registration_id= '611' and  office_id= '1' 
 Execution Time:0.00073504447937012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=611  
 Execution Time:0.0028970241546631

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=611  
 Execution Time:0.0010371208190918

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='611' and  office_id= '1' 
 Execution Time:0.0002439022064209

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001507043838501

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012738704681396

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012738704681396

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_appointment where  patient_registration_id = 611 and appointment_date= '2022-03-23' 
 Execution Time:0.00084996223449707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 614 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 690 
 Execution Time:0.00027585029602051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 690  and `patient_registration_id` = 614 
 Execution Time:0.00020313262939453

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 614 
 Execution Time:0.0014851093292236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select * from examination where examination_id= '612' and   office_id= '1' 
 Execution Time:0.011602163314819

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 612 
 Execution Time:0.0016398429870605

select * from examination_chargesdetails where  examination_id= '612' 
 Execution Time:0.0024318695068359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034451484680176

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034451484680176

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0054910182952881

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013761520385742

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013761520385742

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026750564575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058913230895996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015621185302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028848648071289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058913230895996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015621185302734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088596343994141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088596343994141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00565505027771

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00565505027771

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0053179264068604

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00565505027771

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0053179264068604

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0069220066070557

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00565505027771

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0053179264068604

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0069220066070557

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 611 
 Execution Time:0.0040411949157715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 687 
 Execution Time:0.0038599967956543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 687  and `patient_registration_id` = 611 
 Execution Time:0.0010828971862793

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 611 
 Execution Time:0.002126932144165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002910852432251

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002910852432251

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036568641662598

select * from examination where examination_id= '609' and   office_id= '1' 
 Execution Time:0.0017731189727783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 609 
 Execution Time:0.00060391426086426

select * from examination_chargesdetails where  examination_id= '609' 
 Execution Time:0.00098705291748047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015888214111328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015888214111328

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011889934539795

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 625 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 708 
 Execution Time:0.00033092498779297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 708  and `patient_registration_id` = 625 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037131309509277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037131309509277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016679763793945

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 625 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 708 
 Execution Time:0.00034594535827637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 708  and `patient_registration_id` = 625 
 Execution Time:0.00061202049255371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 625 
 Execution Time:0.00099706649780273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select * from examination where examination_id= '629' and   office_id= '1' 
 Execution Time:0.0049760341644287

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027360916137695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 629 
 Execution Time:0.0074319839477539

select * from examination_chargesdetails where  examination_id= '629' 
 Execution Time:0.00046896934509277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049209594726562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011780261993408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011780261993408

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='60' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010371208190918

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015869140625

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072908401489258

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068497657775879

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='100' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0038831233978271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.019065856933594

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-23' and  billing_master.office_id= 1        
 Execution Time:0.0014970302581787

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-23' and  billing_master.office_id= 1        
 Execution Time:0.0014970302581787

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
		where billing=0 and appointment_date between  '2022-03-23' and '2022-03-23' and  patient_registration.office_id= 1      
 Execution Time:0.047605037689209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019838809967041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019838809967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015227794647217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019838809967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015227794647217

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0050039291381836

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0050039291381836

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0050039291381836

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0045108795166016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.0065310001373291

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0026822090148926

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0026822090148926

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.0036129951477051

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0016429424285889

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0016429424285889

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from office where  office_id= '1' 
 Execution Time:0.003648042678833

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.023628950119019

select count(*) as cnt from investigation where  name = 'CHALAZION-I&amp;C (INCISION &amp;CURETTAGE)' and office_id= '1' 
 Execution Time:0.0036721229553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00053310394287109

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00053310394287109

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0058600902557373

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00053310394287109

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0058600902557373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.00079679489135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00045418739318848

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00045418739318848

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=6  
 Execution Time:0.0020921230316162

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00045418739318848

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=6  
 Execution Time:0.0020921230316162

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=6  
 Execution Time:0.00062298774719238

select count(*) as cnt from patient_registration where  patient_registration_id= '511' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '511' and  office_id= '1' 
 Execution Time:0.00035595893859863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=511  
 Execution Time:0.0035760402679443

select count(*) as cnt from patient_registration where  patient_registration_id= '511' and  office_id= '1' 
 Execution Time:0.00035595893859863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=511  
 Execution Time:0.0035760402679443

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=511  
 Execution Time:0.0071139335632324

select count(*) as cnt from patient_registration where  patient_registration_id= '511' and  office_id= '1' 
 Execution Time:0.00035595893859863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=511  
 Execution Time:0.0035760402679443

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=511  
 Execution Time:0.0071139335632324

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='511' and  office_id= '1' 
 Execution Time:0.00097393989562988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select * from investigation where  investigation_id=30  and office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015881061553955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013949871063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069713592529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015881061553955

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086498260498047

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013258457183838

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029850006103516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029850006103516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026330947875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026330947875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026330947875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 611 
 Execution Time:0.00040388107299805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 707 
 Execution Time:0.0016138553619385

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 707  and `patient_registration_id` = 611 
 Execution Time:0.002079963684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019509792327881

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019509792327881

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 626 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 709 
 Execution Time:0.00048279762268066

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 709  and `patient_registration_id` = 626 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035138130187988

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035138130187988

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 611 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 707 
 Execution Time:0.0013189315795898

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 707  and `patient_registration_id` = 611 
 Execution Time:0.00052499771118164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 611 
 Execution Time:0.001823902130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075221061706543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075221061706543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044069290161133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044069290161133

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from examination where examination_id= '630' and   office_id= '1' 
 Execution Time:0.00098109245300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 630 
 Execution Time:0.02290415763855

select * from examination_chargesdetails where  examination_id= '630' 
 Execution Time:0.014286994934082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 626 
 Execution Time:0.00039291381835938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 709 
 Execution Time:0.00030899047851562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 709  and `patient_registration_id` = 626 
 Execution Time:0.00029301643371582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 626 
 Execution Time:0.0010778903961182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select * from examination where examination_id= '631' and   office_id= '1' 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 631 
 Execution Time:0.00027799606323242

select * from examination_chargesdetails where  examination_id= '631' 
 Execution Time:0.0002439022064209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006861686706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006861686706543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00027179718017578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 710 
 Execution Time:0.00020503997802734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 710  and `patient_registration_id` = 627 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 710 
 Execution Time:0.0002448558807373

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 710  and `patient_registration_id` = 627 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00065517425537109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 710 
 Execution Time:0.00063991546630859

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 710  and `patient_registration_id` = 627 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_registration where  patient_registration_id= '583' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '583' and  office_id= '1' 
 Execution Time:0.00033307075500488

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=583  
 Execution Time:0.0027918815612793

select count(*) as cnt from patient_registration where  patient_registration_id= '583' and  office_id= '1' 
 Execution Time:0.00033307075500488

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=583  
 Execution Time:0.0027918815612793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=583  
 Execution Time:0.00088715553283691

select count(*) as cnt from patient_registration where  patient_registration_id= '583' and  office_id= '1' 
 Execution Time:0.00033307075500488

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=583  
 Execution Time:0.0027918815612793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=583  
 Execution Time:0.00088715553283691

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='583' and  office_id= '1' 
 Execution Time:0.00021886825561523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010349750518799

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010349750518799

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_appointment where  patient_registration_id = 583 and appointment_date= '2022-03-23' 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.003931999206543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.0010201930999756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.00031614303588867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.00021505355834961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00076889991760254

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 710 
 Execution Time:0.00047206878662109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 710  and `patient_registration_id` = 627 
 Execution Time:0.00049209594726562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 627 
 Execution Time:0.0014758110046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001093864440918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001093864440918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028085708618164

select * from examination where examination_id= '632' and   office_id= '1' 
 Execution Time:0.001255989074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 632 
 Execution Time:0.00054502487182617

select * from examination_chargesdetails where  examination_id= '632' 
 Execution Time:0.00048208236694336

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0024809837341309

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066590309143066

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060677528381348

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='87' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088715553283691

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052499771118164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061702728271484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002892017364502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078916549682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078916549682617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088214874267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 628 
 Execution Time:0.00028085708618164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 712 
 Execution Time:0.00026416778564453

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 712  and `patient_registration_id` = 628 
 Execution Time:0.00039315223693848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010209083557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010209083557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010209083557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012810230255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012810230255127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041408538818359

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003748893737793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037460327148438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012810230255127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034558773040771

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034558773040771

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038089752197266

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032010078430176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032010078430176

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003803014755249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032880306243896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0061078071594238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0061078071594238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.00082802772521973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.00053095817565918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.00056695938110352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.00042915344238281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.00050878524780273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.00022697448730469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.0002601146697998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 583 
 Execution Time:0.0014450550079346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015850067138672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015850067138672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select * from examination where examination_id= '633' and   office_id= '1' 
 Execution Time:0.002223014831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 633 
 Execution Time:0.0013279914855957

select * from examination_chargesdetails where  examination_id= '633' 
 Execution Time:0.0011799335479736

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002598762512207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 628 
 Execution Time:0.00063300132751465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 712 
 Execution Time:0.00059700012207031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 712  and `patient_registration_id` = 628 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 628 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 712 
 Execution Time:0.00034499168395996

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 712  and `patient_registration_id` = 628 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031709671020508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031709671020508

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043988227844238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 629 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 713 
 Execution Time:0.00032806396484375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 713  and `patient_registration_id` = 629 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037038326263428

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037038326263428

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037038326263428

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037038326263428

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 583 
 Execution Time:0.0040240287780762

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 711 
 Execution Time:0.0038249492645264

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 711  and `patient_registration_id` = 583 
 Execution Time:0.0037660598754883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 583 
 Execution Time:0.0039160251617432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from examination where examination_id= '633' and   office_id= '1' 
 Execution Time:0.00082206726074219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 633 
 Execution Time:0.00047111511230469

select * from examination_chargesdetails where  examination_id= '633' 
 Execution Time:0.00045204162597656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001244068145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001244068145752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011451244354248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001244068145752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016350746154785

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051593780517578

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00026679039001465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060200691223145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056548118591309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015630722045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056548118591309

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0034458637237549

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0034458637237549

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 628 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 712 
 Execution Time:0.00077199935913086

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 712  and `patient_registration_id` = 628 
 Execution Time:0.00085306167602539

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 628 
 Execution Time:0.0024991035461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012688636779785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012688636779785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select * from examination where examination_id= '634' and   office_id= '1' 
 Execution Time:0.0010218620300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 634 
 Execution Time:0.00053310394287109

select * from examination_chargesdetails where  examination_id= '634' 
 Execution Time:0.00081801414489746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017869472503662

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017869472503662

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079083442687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079083442687988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079083442687988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049614906311035

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='22' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021471977233887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013020038604736

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013020038604736

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088708400726318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017120838165283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017120838165283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017120838165283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024340152740479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017120838165283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024340152740479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026178359985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018999576568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017120838165283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024340152740479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select * from office where  office_id= '1' 
 Execution Time:0.00072479248046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 629 
 Execution Time:0.001082181930542

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 713 
 Execution Time:0.0014419555664062

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 713  and `patient_registration_id` = 629 
 Execution Time:0.00180983543396

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 629 
 Execution Time:0.0052750110626221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select * from examination where examination_id= '635' and   office_id= '1' 
 Execution Time:0.00095820426940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 635 
 Execution Time:0.00043010711669922

select * from examination_chargesdetails where  examination_id= '635' 
 Execution Time:0.00040197372436523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.012624979019165

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.012624979019165

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0088160037994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078916549682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078916549682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033402442932129

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022387504577637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 631 
 Execution Time:0.0002281665802002

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 715 
 Execution Time:0.00037789344787598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 715  and `patient_registration_id` = 631 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 631 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 715 
 Execution Time:0.0001990795135498

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 715  and `patient_registration_id` = 631 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067877769470215

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067877769470215

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028009414672852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028009414672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028009414672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038199424743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028009414672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038199424743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003993034362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017588138580322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025019645690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028009414672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038199424743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003993034362793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023603439331055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 631 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 715 
 Execution Time:0.00025606155395508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 715  and `patient_registration_id` = 631 
 Execution Time:0.0037229061126709

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 631 
 Execution Time:0.0019841194152832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select * from examination where examination_id= '636' and   office_id= '1' 
 Execution Time:0.00093388557434082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 636 
 Execution Time:0.00058603286743164

select * from examination_chargesdetails where  examination_id= '636' 
 Execution Time:0.00056099891662598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 632 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 716 
 Execution Time:0.0002281665802002

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 716  and `patient_registration_id` = 632 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048089027404785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='22' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010421276092529

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='78' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011019706726074

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00095081329345703

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='72' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075912475585938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 632 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 716 
 Execution Time:0.00034499168395996

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 716  and `patient_registration_id` = 632 
 Execution Time:0.00037503242492676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 632 
 Execution Time:0.0018939971923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select * from examination where examination_id= '637' and   office_id= '1' 
 Execution Time:0.0014231204986572

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 637 
 Execution Time:0.00048398971557617

select * from examination_chargesdetails where  examination_id= '637' 
 Execution Time:0.00081491470336914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022399425506592

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022399425506592

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034728050231934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 630 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 714 
 Execution Time:0.00059986114501953

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 714  and `patient_registration_id` = 630 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 630 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 714 
 Execution Time:0.00025796890258789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 714  and `patient_registration_id` = 630 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061297416687012

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 632 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 716 
 Execution Time:0.00036215782165527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 716  and `patient_registration_id` = 632 
 Execution Time:0.00028300285339355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 632 
 Execution Time:0.0015618801116943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065207481384277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065207481384277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select * from examination where examination_id= '637' and   office_id= '1' 
 Execution Time:0.0008690357208252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 637 
 Execution Time:0.00049805641174316

select * from examination_chargesdetails where  examination_id= '637' 
 Execution Time:0.00044012069702148

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 635 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 719 
 Execution Time:0.00023603439331055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 719  and `patient_registration_id` = 635 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073480606079102

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073480606079102

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039386749267578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 630 
 Execution Time:0.00078582763671875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 714 
 Execution Time:0.001039981842041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 714  and `patient_registration_id` = 630 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083804130554199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083804130554199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 635 
 Execution Time:0.00072789192199707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 719 
 Execution Time:0.00042486190795898

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 719  and `patient_registration_id` = 635 
 Execution Time:0.00053811073303223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 635 
 Execution Time:0.00154709815979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0089750289916992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0089750289916992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select * from examination where examination_id= '638' and   office_id= '1' 
 Execution Time:0.00074315071105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 638 
 Execution Time:0.00050687789916992

select * from examination_chargesdetails where  examination_id= '638' 
 Execution Time:0.00054407119750977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 633 
 Execution Time:0.0015199184417725

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 717 
 Execution Time:0.0004270076751709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 717  and `patient_registration_id` = 633 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 634 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 718 
 Execution Time:0.00017809867858887

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 718  and `patient_registration_id` = 634 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 634 
 Execution Time:0.00098705291748047

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 718 
 Execution Time:0.00030112266540527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 718  and `patient_registration_id` = 634 
 Execution Time:0.00076198577880859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 634 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 718 
 Execution Time:0.00022506713867188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 718  and `patient_registration_id` = 634 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005638599395752

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005638599395752

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003687858581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003687858581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044691562652588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003687858581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044691562652588

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003687858581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044691562652588

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865


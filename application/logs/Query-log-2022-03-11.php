select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025498867034912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025498867034912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062401294708252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025498867034912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042939186096191

select count(*) as cnt from patient_registration where  patient_registration_id= '384' and  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  patient_registration_id= '384' and  office_id= '1' 
 Execution Time:0.00042891502380371

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=384  
 Execution Time:0.002155065536499

select count(*) as cnt from patient_registration where  patient_registration_id= '384' and  office_id= '1' 
 Execution Time:0.00042891502380371

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=384  
 Execution Time:0.002155065536499

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=384  
 Execution Time:0.00075793266296387

select count(*) as cnt from patient_registration where  patient_registration_id= '384' and  office_id= '1' 
 Execution Time:0.00042891502380371

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=384  
 Execution Time:0.002155065536499

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=384  
 Execution Time:0.00075793266296387

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='384' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024847984313965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024847984313965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022068023681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024847984313965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027501583099365

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027501583099365

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027501583099365

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027501583099365

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00070905685424805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00037598609924316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 238  and `patient_registration_id` = 185 
 Execution Time:0.0022668838500977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select * from examination where examination_id= '90' and   office_id= '1' 
 Execution Time:0.0031890869140625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 90 
 Execution Time:0.0041139125823975

select * from examination_chargesdetails where  examination_id= '90' 
 Execution Time:0.0039119720458984

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023910999298096

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023910999298096

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024731159210205

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024731159210205

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00060510635375977

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0010380744934082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00032186508178711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0025339126586914

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00032186508178711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0025339126586914

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=381  
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00032186508178711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0025339126586914

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=381  
 Execution Time:0.00075101852416992

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='381' and  office_id= '1' 
 Execution Time:0.00019383430480957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032210350036621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00047397613525391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0032758712768555

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00047397613525391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0032758712768555

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=382  
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00047397613525391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0032758712768555

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=382  
 Execution Time:0.00072503089904785

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='382' and  office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00045394897460938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0028278827667236

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00045394897460938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0028278827667236

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=382  
 Execution Time:0.0010149478912354

select count(*) as cnt from patient_registration where  patient_registration_id= '382' and  office_id= '1' 
 Execution Time:0.00045394897460938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=382  
 Execution Time:0.0028278827667236

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=382  
 Execution Time:0.0010149478912354

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='382' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043988227844238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025289058685303

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025289058685303

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025289058685303

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 419 
 Execution Time:0.00021910667419434

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 419  and `patient_registration_id` = 387 
 Execution Time:0.0028541088104248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050561428070068

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050561428070068

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.00078797340393066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 419 
 Execution Time:0.00054097175598145

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 419  and `patient_registration_id` = 387 
 Execution Time:0.00048398971557617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 387 
 Execution Time:0.0013408660888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from examination where examination_id= '364' and   office_id= '1' 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 364 
 Execution Time:0.0025870800018311

select * from examination_chargesdetails where  examination_id= '364' 
 Execution Time:0.0022790431976318

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0055282115936279

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0055282115936279

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050806999206543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 384 
 Execution Time:0.00043606758117676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 417 
 Execution Time:0.0002901554107666

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 417  and `patient_registration_id` = 384 
 Execution Time:0.00059103965759277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099492073059082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099492073059082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039219856262207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 384 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 417 
 Execution Time:0.00026798248291016

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 417  and `patient_registration_id` = 384 
 Execution Time:0.00033402442932129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 384 
 Execution Time:0.0010459423065186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select * from examination where examination_id= '365' and   office_id= '1' 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 365 
 Execution Time:0.00029301643371582

select * from examination_chargesdetails where  examination_id= '365' 
 Execution Time:0.0005950927734375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068283081054688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068283081054688

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061178207397461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 384 
 Execution Time:0.00043892860412598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 417 
 Execution Time:0.00047588348388672

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 417  and `patient_registration_id` = 384 
 Execution Time:0.00035810470581055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 384 
 Execution Time:0.00082492828369141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from examination where examination_id= '365' and   office_id= '1' 
 Execution Time:0.0028958320617676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 365 
 Execution Time:0.00052809715270996

select * from examination_chargesdetails where  examination_id= '365' 
 Execution Time:0.0004429817199707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037312507629395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037312507629395

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0034551620483398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067970752716064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067970752716064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028328895568848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067970752716064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028328895568848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032749176025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067970752716064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028328895568848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032749176025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045771598815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031051635742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043141841888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041141510009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067970752716064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028328895568848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032749176025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select count(*) as cnt from patient_registration where  patient_registration_id= '385' and  office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_registration where  patient_registration_id= '385' and  office_id= '1' 
 Execution Time:0.00047802925109863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=385  
 Execution Time:0.0030250549316406

select count(*) as cnt from patient_registration where  patient_registration_id= '385' and  office_id= '1' 
 Execution Time:0.00047802925109863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=385  
 Execution Time:0.0030250549316406

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=385  
 Execution Time:0.0010221004486084

select count(*) as cnt from patient_registration where  patient_registration_id= '385' and  office_id= '1' 
 Execution Time:0.00047802925109863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=385  
 Execution Time:0.0030250549316406

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=385  
 Execution Time:0.0010221004486084

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='385' and  office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021886825561523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.00080108642578125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.00080108642578125

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-11' and '2022-03-11' and  patient_registration.office_id= 1      
 Execution Time:0.0014808177947998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-10' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0011651515960693

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-10' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0011651515960693

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-10' and '2022-03-11' and  patient_registration.office_id= 1      
 Execution Time:0.0029070377349854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 386 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 418 
 Execution Time:0.00026106834411621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 418  and `patient_registration_id` = 386 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099301338195801

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099301338195801

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010771751403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010771751403809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 382 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 422 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 422  and `patient_registration_id` = 382 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 386 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 418 
 Execution Time:0.00018501281738281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 418  and `patient_registration_id` = 386 
 Execution Time:0.00024890899658203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 386 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027298927307129

select * from examination where examination_id= '366' and   office_id= '1' 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 366 
 Execution Time:0.00061297416687012

select * from examination_chargesdetails where  examination_id= '366' 
 Execution Time:0.00030088424682617

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074195861816406

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055503845214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 382 
 Execution Time:0.00022721290588379

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 422 
 Execution Time:0.00025010108947754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 422  and `patient_registration_id` = 382 
 Execution Time:0.00027799606323242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 382 
 Execution Time:0.00084900856018066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from examination where examination_id= '367' and   office_id= '1' 
 Execution Time:0.00097393989562988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 367 
 Execution Time:0.00046515464782715

select * from examination_chargesdetails where  examination_id= '367' 
 Execution Time:0.00048995018005371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089597702026367

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089597702026367

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058221817016602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055813789367676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00047993659973145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055098533630371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.00037384033203125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 419 
 Execution Time:0.00039100646972656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 419  and `patient_registration_id` = 387 
 Execution Time:0.00043988227844238

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 387 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053620338439941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053620338439941

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from examination where examination_id= '364' and   office_id= '1' 
 Execution Time:0.00072407722473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 364 
 Execution Time:0.00024890899658203

select * from examination_chargesdetails where  examination_id= '364' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043082237243652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 388 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 420 
 Execution Time:0.00024700164794922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 420  and `patient_registration_id` = 388 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089597702026367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089597702026367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059890747070312

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042819976806641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042819976806641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 388 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 420 
 Execution Time:0.0002739429473877

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 420  and `patient_registration_id` = 388 
 Execution Time:0.00024986267089844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 388 
 Execution Time:0.0009620189666748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select * from examination where examination_id= '368' and   office_id= '1' 
 Execution Time:0.001568078994751

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 368 
 Execution Time:0.00069808959960938

select * from examination_chargesdetails where  examination_id= '368' 
 Execution Time:0.00048995018005371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043678283691406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.0002591609954834

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 419 
 Execution Time:0.00030088424682617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 419  and `patient_registration_id` = 387 
 Execution Time:0.00023579597473145

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 387 
 Execution Time:0.00068998336791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from examination where examination_id= '364' and   office_id= '1' 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 364 
 Execution Time:0.00044012069702148

select * from examination_chargesdetails where  examination_id= '364' 
 Execution Time:0.00027704238891602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025105476379395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 392 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 427 
 Execution Time:0.0003662109375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 427  and `patient_registration_id` = 392 
 Execution Time:0.0018200874328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098299980163574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001162052154541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0031588077545166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 389 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 423 
 Execution Time:0.0004270076751709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 423  and `patient_registration_id` = 389 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035381317138672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 392 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 427 
 Execution Time:0.00024199485778809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 427  and `patient_registration_id` = 392 
 Execution Time:0.00033402442932129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 392 
 Execution Time:0.00090909004211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072002410888672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072002410888672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select * from examination where examination_id= '369' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 369 
 Execution Time:0.00039410591125488

select * from examination_chargesdetails where  examination_id= '369' 
 Execution Time:0.00026082992553711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0039510726928711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010919570922852

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084209442138672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 388 
 Execution Time:0.00053811073303223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 420 
 Execution Time:0.0002751350402832

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 420  and `patient_registration_id` = 388 
 Execution Time:0.00022196769714355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 388 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select * from examination where examination_id= '368' and   office_id= '1' 
 Execution Time:0.00075888633728027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 368 
 Execution Time:0.00058102607727051

select * from examination_chargesdetails where  examination_id= '368' 
 Execution Time:0.00037908554077148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036871433258057

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036871433258057

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041999816894531

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074911117553711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066781044006348

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013730525970459

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 392 
 Execution Time:0.0011169910430908

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 427 
 Execution Time:0.00049781799316406

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 427  and `patient_registration_id` = 392 
 Execution Time:0.00033903121948242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 392 
 Execution Time:0.0015499591827393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select * from examination where examination_id= '369' and   office_id= '1' 
 Execution Time:0.0015008449554443

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 369 
 Execution Time:0.0002589225769043

select * from examination_chargesdetails where  examination_id= '369' 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023608207702637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023608207702637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008549690246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 393 
 Execution Time:0.00042486190795898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 428 
 Execution Time:0.0002892017364502

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 428  and `patient_registration_id` = 393 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033688545227051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 389 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 423 
 Execution Time:0.00027203559875488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 423  and `patient_registration_id` = 389 
 Execution Time:0.00023412704467773

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 389 
 Execution Time:0.00093197822570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from examination where examination_id= '370' and   office_id= '1' 
 Execution Time:0.00094318389892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 370 
 Execution Time:0.00039887428283691

select * from examination_chargesdetails where  examination_id= '370' 
 Execution Time:0.0042939186096191

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026509761810303

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 392 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 427 
 Execution Time:0.00059103965759277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 427  and `patient_registration_id` = 392 
 Execution Time:0.00055313110351562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 392 
 Execution Time:0.0010740756988525

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061583518981934

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041317939758301

select * from examination where examination_id= '369' and   office_id= '1' 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 369 
 Execution Time:0.00027990341186523

select * from examination_chargesdetails where  examination_id= '369' 
 Execution Time:0.00021600723266602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078701972961426

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088191032409668

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001384973526001

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091385841369629

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00034117698669434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 421 
 Execution Time:0.0005488395690918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 421  and `patient_registration_id` = 381 
 Execution Time:0.00063681602478027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 390 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 425 
 Execution Time:0.00028395652770996

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 425  and `patient_registration_id` = 390 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 391 
 Execution Time:0.00040483474731445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 426 
 Execution Time:0.00075006484985352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 426  and `patient_registration_id` = 391 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00029087066650391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.00024008750915527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00029087066650391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.0002140998840332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00026988983154297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 385 
 Execution Time:0.0010890960693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010390281677246

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010390281677246

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019748210906982

select * from examination where examination_id= '375' and   office_id= '1' 
 Execution Time:0.0012369155883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 375 
 Execution Time:0.00089001655578613

select * from examination_chargesdetails where  examination_id= '375' 
 Execution Time:0.00085306167602539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 421 
 Execution Time:0.00016498565673828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 421  and `patient_registration_id` = 381 
 Execution Time:0.00039196014404297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 381 
 Execution Time:0.0012128353118896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select * from examination where examination_id= '372' and   office_id= '1' 
 Execution Time:0.0007178783416748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 372 
 Execution Time:0.00039505958557129

select * from examination_chargesdetails where  examination_id= '372' 
 Execution Time:0.00028300285339355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010590553283691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 390 
 Execution Time:0.00049209594726562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 425 
 Execution Time:0.00034594535827637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 425  and `patient_registration_id` = 390 
 Execution Time:0.00064802169799805

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 390 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086212158203125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086212158203125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from examination where examination_id= '373' and   office_id= '1' 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 373 
 Execution Time:0.00025510787963867

select * from examination_chargesdetails where  examination_id= '373' 
 Execution Time:0.00018095970153809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085592269897461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 391 
 Execution Time:0.00036096572875977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 426 
 Execution Time:0.00023889541625977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 426  and `patient_registration_id` = 391 
 Execution Time:0.00070405006408691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 391 
 Execution Time:0.0010280609130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from examination where examination_id= '374' and   office_id= '1' 
 Execution Time:0.014616966247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010605096817017

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 374 
 Execution Time:0.0020630359649658

select * from examination_chargesdetails where  examination_id= '374' 
 Execution Time:0.00073814392089844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084805488586426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084805488586426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091910362243652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075292587280273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011889934539795

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011889934539795

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001539945602417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001539945602417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001539945602417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 393 
 Execution Time:0.00035715103149414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 428 
 Execution Time:0.00034189224243164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 428  and `patient_registration_id` = 393 
 Execution Time:0.00072813034057617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 393 
 Execution Time:0.0015029907226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select * from examination where examination_id= '371' and   office_id= '1' 
 Execution Time:0.0014078617095947

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 371 
 Execution Time:0.00040483474731445

select * from examination_chargesdetails where  examination_id= '371' 
 Execution Time:0.00056791305541992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063610076904297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063610076904297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 394 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 429 
 Execution Time:0.00035405158996582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 429  and `patient_registration_id` = 394 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 394 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 429 
 Execution Time:0.00033688545227051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 429  and `patient_registration_id` = 394 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024211406707764

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024211406707764

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024211406707764

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 394 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 429 
 Execution Time:0.00027918815612793

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 429  and `patient_registration_id` = 394 
 Execution Time:0.00022602081298828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 394 
 Execution Time:0.0012550354003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select * from examination where examination_id= '376' and   office_id= '1' 
 Execution Time:0.001338005065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 376 
 Execution Time:0.00085592269897461

select * from examination_chargesdetails where  examination_id= '376' 
 Execution Time:0.00051307678222656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078082084655762

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078082084655762

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011110305786133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011110305786133

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='60' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012900829315186

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077104568481445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080108642578125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='97' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054001808166504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079488754272461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048613548278809

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077605247497559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077605247497559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010581016540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010581016540527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010581016540527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 395 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 430 
 Execution Time:0.00034809112548828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 430  and `patient_registration_id` = 395 
 Execution Time:0.00031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 395 
 Execution Time:0.00074219703674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 430 
 Execution Time:0.00055313110351562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 430  and `patient_registration_id` = 395 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001187801361084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001187801361084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '394' and  office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_registration where  patient_registration_id= '394' and  office_id= '1' 
 Execution Time:0.00063705444335938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=394  
 Execution Time:0.0029158592224121

select count(*) as cnt from patient_registration where  patient_registration_id= '394' and  office_id= '1' 
 Execution Time:0.00063705444335938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=394  
 Execution Time:0.0029158592224121

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=394  
 Execution Time:0.00071191787719727

select count(*) as cnt from patient_registration where  patient_registration_id= '394' and  office_id= '1' 
 Execution Time:0.00063705444335938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=394  
 Execution Time:0.0029158592224121

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=394  
 Execution Time:0.00071191787719727

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='394' and  office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054621696472168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054621696472168

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0011360645294189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 396 
 Execution Time:0.00063014030456543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 431 
 Execution Time:0.00084090232849121

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 431  and `patient_registration_id` = 396 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003709077835083

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003709077835083

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026490688323975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031359195709229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031359195709229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025408267974854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012535095214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016570091247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031359195709229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025408267974854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027599334716797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027599334716797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027599334716797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017077922821045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027599334716797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017077922821045

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024490356445312

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0036578178405762

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0036578178405762

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-11' and '2022-03-11' and  patient_registration.office_id= 1      
 Execution Time:0.0035369396209717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.00036811828613281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00056695938110352

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 385 
 Execution Time:0.0019960403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053989887237549

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053989887237549

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093412399291992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028581619262695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028581619262695

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016200542449951

select * from examination where examination_id= '375' and   office_id= '1' 
 Execution Time:0.0036849975585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039501190185547

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 375 
 Execution Time:0.0024819374084473

select * from examination_chargesdetails where  examination_id= '375' 
 Execution Time:0.0043919086456299

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 395 
 Execution Time:0.00056886672973633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 430 
 Execution Time:0.00038409233093262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 430  and `patient_registration_id` = 395 
 Execution Time:0.00059390068054199

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 395 
 Execution Time:0.001230001449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028610229492188

select * from examination where examination_id= '377' and   office_id= '1' 
 Execution Time:0.00061202049255371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026168823242188

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 377 
 Execution Time:0.0026950836181641

select * from examination_chargesdetails where  examination_id= '377' 
 Execution Time:0.00098800659179688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033259391784668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033259391784668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087308883666992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001054048538208

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001417875289917

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001417875289917

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001417875289917

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001417875289917

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 396 
 Execution Time:0.0022320747375488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 431 
 Execution Time:0.00049400329589844

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 431  and `patient_registration_id` = 396 
 Execution Time:0.00078797340393066

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 396 
 Execution Time:0.0012722015380859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037384033203125

select * from examination where examination_id= '378' and   office_id= '1' 
 Execution Time:0.0019140243530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 378 
 Execution Time:0.00041007995605469

select * from examination_chargesdetails where  examination_id= '378' 
 Execution Time:0.0034661293029785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026392936706543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001007080078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013501644134521

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013501644134521

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010979175567627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010979175567627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011554002761841

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047671794891357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004345178604126

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010979175567627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042319297790527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016069412231445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016069412231445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019378662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033419132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019378662109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018558502197266

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0013489723205566

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-11' and  '2022-03-11' and  billing_master.office_id= 1        
 Execution Time:0.0013489723205566

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-11' and '2022-03-11' and  patient_registration.office_id= 1      
 Execution Time:0.0036821365356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013449192047119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017076969146729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012221336364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013449192047119

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027618408203125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027618408203125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.00026512145996094

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039911270141602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.00031113624572754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002140998840332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074577331542969

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074577331542969

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 397 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 432 
 Execution Time:0.0001678466796875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 432  and `patient_registration_id` = 397 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00066614151000977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.00045084953308105

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00050592422485352

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 385 
 Execution Time:0.0012741088867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001478910446167

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001478910446167

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select * from examination where examination_id= '375' and   office_id= '1' 
 Execution Time:0.0018250942230225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 375 
 Execution Time:0.0011951923370361

select * from examination_chargesdetails where  examination_id= '375' 
 Execution Time:0.0014510154724121

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090312957763672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090312957763672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015180110931396

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015180110931396

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012390613555908

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012390613555908

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045013427734375

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010998249053955

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='44' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013298988342285

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='44' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013298988342285

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='44' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013298988342285

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select user_id,name from  user where user_type=6 
 Execution Time:0.00029206275939941

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='44' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013298988342285

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select user_id,name from  user where user_type=6 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016391277313232

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016391277313232

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.00068497657775879

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.0003969669342041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.0005338191986084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 419 
 Execution Time:0.00021982192993164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 419  and `patient_registration_id` = 387 
 Execution Time:0.00056219100952148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 387 
 Execution Time:0.0014810562133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select * from examination where examination_id= '364' and   office_id= '1' 
 Execution Time:0.00093197822570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 364 
 Execution Time:0.00075602531433105

select * from examination_chargesdetails where  examination_id= '364' 
 Execution Time:0.00083208084106445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046181678771973

SELECT *
FROM `examination`
WHERE `examination_id` = 364 
 Execution Time:0.0011579990386963

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00054383277893066

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 387 
 Execution Time:0.00073814392089844

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0015988349914551

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=364 
 Execution Time:0.0016951560974121

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=364 
 Execution Time:0.00087690353393555

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=364 
 Execution Time:0.0007319450378418

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=364 
 Execution Time:0.00066399574279785

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='364' and office_id='1' 
 Execution Time:0.0012731552124023

select * from examination_chargesdetails where  examination_id= '364' 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-11' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0034859180450439

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-11' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0008699893951416

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='4' and admission_date='2022-03-11' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00090909004211426

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-11' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0010759830474854

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-11' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0024330615997314

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015759468078613

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015759468078613

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013039112091064

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012600421905518

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010130405426025

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010130405426025

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010130405426025

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015721321105957

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0022008419036865

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00074291229248047

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00096797943115234

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00079894065856934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 397 
 Execution Time:0.00075197219848633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 432 
 Execution Time:0.0007789134979248

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 432  and `patient_registration_id` = 397 
 Execution Time:0.00111985206604

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 397 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041680335998535

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041680335998535

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034859180450439

select * from examination where examination_id= '380' and   office_id= '1' 
 Execution Time:0.0033841133117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033020973205566

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 380 
 Execution Time:0.0039429664611816

select * from examination_chargesdetails where  examination_id= '380' 
 Execution Time:0.0013561248779297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0023479461669922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.00023698806762695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.00027704238891602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 398 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076580047607422

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076580047607422

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from examination where examination_id= '379' and   office_id= '1' 
 Execution Time:0.0012478828430176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 379 
 Execution Time:0.00036311149597168

select * from examination_chargesdetails where  examination_id= '379' 
 Execution Time:0.00032591819763184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011329650878906

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077605247497559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094985961914062

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094985961914062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094985961914062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094985961914062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 398 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 433 
 Execution Time:0.00040197372436523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 433  and `patient_registration_id` = 398 
 Execution Time:0.00053787231445312

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 398 
 Execution Time:0.001572847366333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094509124755859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094509124755859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select * from examination where examination_id= '379' and   office_id= '1' 
 Execution Time:0.00096893310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 379 
 Execution Time:0.00062298774719238

select * from examination_chargesdetails where  examination_id= '379' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013999938964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014069080352783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022931098937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013999938964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00060796737670898

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 399 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 434 
 Execution Time:0.00024890899658203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 434  and `patient_registration_id` = 399 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015981197357178

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015981197357178

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 399 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 434 
 Execution Time:0.0005490779876709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 434  and `patient_registration_id` = 399 
 Execution Time:0.00034904479980469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 399 
 Execution Time:0.0013270378112793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select * from examination where examination_id= '381' and   office_id= '1' 
 Execution Time:0.0010240077972412

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 381 
 Execution Time:0.0007319450378418

select * from examination_chargesdetails where  examination_id= '381' 
 Execution Time:0.0011730194091797

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097894668579102

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00024008750915527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.00015687942504883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00053191184997559

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 385 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098609924316406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098609924316406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006258487701416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select * from examination where examination_id= '375' and   office_id= '1' 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 375 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '375' 
 Execution Time:0.00032401084899902

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098896026611328

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084590911865234

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088095664978027

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0027239322662354

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 385 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 424 
 Execution Time:0.00040602684020996

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 424  and `patient_registration_id` = 385 
 Execution Time:0.00032997131347656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 385 
 Execution Time:0.00079894065856934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select * from examination where examination_id= '375' and   office_id= '1' 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 375 
 Execution Time:0.00042009353637695

select * from examination_chargesdetails where  examination_id= '375' 
 Execution Time:0.00035881996154785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046014785766602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 421 
 Execution Time:0.00013995170593262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 421  and `patient_registration_id` = 381 
 Execution Time:0.00011205673217773

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 381 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select * from examination where examination_id= '372' and   office_id= '1' 
 Execution Time:0.0010278224945068

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 372 
 Execution Time:0.00041413307189941

select * from examination_chargesdetails where  examination_id= '372' 
 Execution Time:0.0005791187286377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091290473937988

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091290473937988

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002194881439209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036029815673828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036029815673828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011558532714844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012161731719971

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012161731719971

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010371208190918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085997581481934

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080990791320801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080990791320801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040078163146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012431144714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012431144714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002126932144165

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002126932144165

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002126932144165

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002126932144165

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 401 
 Execution Time:0.0014150142669678

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 436 
 Execution Time:0.00057601928710938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 436  and `patient_registration_id` = 401 
 Execution Time:0.0099740028381348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 401 
 Execution Time:0.0007779598236084

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 436 
 Execution Time:0.00087904930114746

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 436  and `patient_registration_id` = 401 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050048828125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050048828125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038919448852539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.00025701522827148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 171  and `patient_registration_id` = 161 
 Execution Time:0.00032806396484375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 161 
 Execution Time:0.0012609958648682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select * from examination where examination_id= '142' and   office_id= '1' 
 Execution Time:0.00088906288146973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0060820579528809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 142 
 Execution Time:0.0013389587402344

select * from examination_chargesdetails where  examination_id= '142' 
 Execution Time:0.0012807846069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 401 
 Execution Time:0.0023770332336426

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 436 
 Execution Time:0.0028162002563477

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 436  and `patient_registration_id` = 401 
 Execution Time:0.0018680095672607

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 401 
 Execution Time:0.0023119449615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select * from examination where examination_id= '382' and   office_id= '1' 
 Execution Time:0.004256010055542

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 382 
 Execution Time:0.0048980712890625

select * from examination_chargesdetails where  examination_id= '382' 
 Execution Time:0.0039219856262207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014278888702393

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014278888702393

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036489963531494

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036489963531494

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027709007263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027709007263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0053791999816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018711090087891

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027709007263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024421215057373

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00042986869812012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0043730735778809

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00042986869812012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0043730735778809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=257  
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00042986869812012

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0043730735778809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=257  
 Execution Time:0.00059986114501953

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='257' and  office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031185150146484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031185150146484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022101402282715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00023412704467773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.0010621547698975

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00044488906860352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00030207633972168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.00093293190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.0011439323425293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.00030016899108887

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.0003049373626709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021719932556152

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086283683776855

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086283683776855

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049519538879395

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00059604644775391

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.00069499015808105

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00025796890258789

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.000518798828125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00034713745117188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.0011329650878906

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.00054216384887695

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.00039100646972656

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.00042390823364258

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.00092697143554688

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00056600570678711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0031170845031738

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00056600570678711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0031170845031738

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.00089883804321289

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00056600570678711

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0031170845031738

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.00089883804321289

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='260' and  office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026512145996094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023508071899414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012960433959961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012960433959961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00020599365234375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00028300285339355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.00090813636779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.0008389949798584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.00053596496582031

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00099802017211914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022220611572266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022220611572266

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00063085556030273

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0037031173706055

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0037031173706055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0007481575012207

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0037031173706055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0007481575012207

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='260' and  office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023508071899414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 401 
 Execution Time:0.00037217140197754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 436 
 Execution Time:0.00028705596923828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 436  and `patient_registration_id` = 401 
 Execution Time:0.00055909156799316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 401 
 Execution Time:0.0010120868682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019540786743164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from examination where examination_id= '382' and   office_id= '1' 
 Execution Time:0.00065493583679199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 382 
 Execution Time:0.0001671314239502

select * from examination_chargesdetails where  examination_id= '382' 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025486946105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 257 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 437 
 Execution Time:0.00017905235290527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 437  and `patient_registration_id` = 257 
 Execution Time:0.00022721290588379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 260 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 438 
 Execution Time:0.00028109550476074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 438  and `patient_registration_id` = 260 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021910667419434

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 257 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 437 
 Execution Time:0.00022315979003906

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 437  and `patient_registration_id` = 257 
 Execution Time:0.00020408630371094

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 257 
 Execution Time:0.00087189674377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from examination where examination_id= '384' and   office_id= '1' 
 Execution Time:0.0036859512329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 384 
 Execution Time:0.0015449523925781

select * from examination_chargesdetails where  examination_id= '384' 
 Execution Time:0.0014529228210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024938583374023

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024938583374023

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034739971160889

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.002039909362793

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00072312355041504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00036001205444336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00033116340637207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.0014100074768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.0011539459228516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.00049591064453125

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00035810470581055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010149478912354

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010149478912354

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023102760314941

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0016248226165771

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.00098013877868652

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0012748241424561

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0010628700256348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00090479850769043

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00085306167602539

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.0016219615936279

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.0029809474945068

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.0016920566558838

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.0013339519500732

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.0024421215057373

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.0032651424407959

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00023317337036133

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00049996376037598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010597705841064

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010597705841064

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.0010020732879639

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.0003199577331543

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00029182434082031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011119842529297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011119842529297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046920776367188

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.0011038780212402

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00032782554626465

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00043416023254395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00044107437133789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00031685829162598

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.001166820526123

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.00080394744873047

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.00062298774719238

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.00055289268493652

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.0009760856628418

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00051593780517578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.00027894973754883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.00093698501586914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.00061798095703125

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00035190582275391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030088424682617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 435 
 Execution Time:0.0001990795135498

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 435  and `patient_registration_id` = 400 
 Execution Time:0.00036501884460449

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 400 
 Execution Time:0.0012118816375732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from examination where examination_id= '383' and   office_id= '1' 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 383 
 Execution Time:0.00029516220092773

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00047707557678223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00060892105102539

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.00070691108703613

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00040507316589355

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045490264892578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00031185150146484

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00036287307739258

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.001183032989502

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.00068283081054688

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.00047016143798828

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.0003199577331543

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.0010039806365967

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00017905235290527

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00086498260498047

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.001230001449585

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0002892017364502

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0004420280456543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.0016560554504395

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.00082898139953613

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.0006260871887207

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.00064206123352051

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.00094413757324219

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.0005030632019043

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005490779876709

SELECT *
FROM `examination`
WHERE `examination_id` = 383 
 Execution Time:0.00065088272094727

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00033092498779297

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 400 
 Execution Time:0.00024914741516113

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00022006034851074

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=383 
 Execution Time:0.00071120262145996

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=383 
 Execution Time:0.00039196014404297

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=383 
 Execution Time:0.00028586387634277

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=383 
 Execution Time:0.00025796890258789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='383' and office_id='1' 
 Execution Time:0.00061202049255371

select * from examination_chargesdetails where  examination_id= '383' 
 Execution Time:0.00013995170593262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039005279541016

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023221969604492

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 402 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 439 
 Execution Time:0.00043582916259766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 439  and `patient_registration_id` = 402 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 402 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 439 
 Execution Time:0.00025582313537598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 439  and `patient_registration_id` = 402 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024604797363281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 402 
 Execution Time:0.00023078918457031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 439 
 Execution Time:0.00017189979553223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 439  and `patient_registration_id` = 402 
 Execution Time:0.00027012825012207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 402 
 Execution Time:0.0007479190826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098609924316406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098609924316406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from examination where examination_id= '386' and   office_id= '1' 
 Execution Time:0.00095009803771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 386 
 Execution Time:0.00045299530029297

select * from examination_chargesdetails where  examination_id= '386' 
 Execution Time:0.00042009353637695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084805488586426

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085783004760742

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005488395690918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011680126190186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011680126190186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035510063171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011701583862305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008690357208252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011680126190186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0045349597930908

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666


select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044960975646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044960975646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044960975646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025031566619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00068306922912598

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
 Execution Time:0.0041148662567139

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00068306922912598

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
 Execution Time:0.0041148662567139

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=520  
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_registration where  patient_registration_id= '520' and  office_id= '1' 
 Execution Time:0.00068306922912598

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
 Execution Time:0.0041148662567139

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=520  
 Execution Time:0.00099611282348633

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='520' and  office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_appointment where  patient_registration_id = 520 and appointment_date= '2022-03-25' 
 Execution Time:0.00097179412841797

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.0007171630859375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 729 
 Execution Time:0.00048708915710449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 729  and `patient_registration_id` = 520 
 Execution Time:0.0029809474945068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023729801177979

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023729801177979

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00092291831970215

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00092291831970215

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097990036010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097990036010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001384973526001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097990036010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001384973526001

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0006251335144043

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 729 
 Execution Time:0.00068902969360352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 729  and `patient_registration_id` = 520 
 Execution Time:0.00066781044006348

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 520 
 Execution Time:0.0017020702362061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select * from examination where examination_id= '651' and   office_id= '1' 
 Execution Time:0.0047371387481689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0058979988098145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 651 
 Execution Time:0.020936965942383

select * from examination_chargesdetails where  examination_id= '651' 
 Execution Time:0.0066511631011963

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029850006103516

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029850006103516

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002377986907959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.004086971282959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.004086971282959

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012021064758301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062704086303711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001046895980835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001046895980835

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001046895980835

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 642 
 Execution Time:0.00033783912658691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 730 
 Execution Time:0.00023293495178223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 730  and `patient_registration_id` = 642 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010299682617188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010299682617188

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 642 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 730 
 Execution Time:0.0002140998840332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 730  and `patient_registration_id` = 642 
 Execution Time:0.00028800964355469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 642 
 Execution Time:0.0012099742889404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select * from examination where examination_id= '652' and   office_id= '1' 
 Execution Time:0.00094890594482422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 652 
 Execution Time:0.00042295455932617

select * from examination_chargesdetails where  examination_id= '652' 
 Execution Time:0.00034403800964355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001105785369873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001105785369873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 642 
 Execution Time:0.00040078163146973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 730 
 Execution Time:0.00041317939758301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 730  and `patient_registration_id` = 642 
 Execution Time:0.00025796890258789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 642 
 Execution Time:0.0011899471282959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select * from examination where examination_id= '652' and   office_id= '1' 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 652 
 Execution Time:0.00028014183044434

select * from examination_chargesdetails where  examination_id= '652' 
 Execution Time:0.00035190582275391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.015109062194824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058603286743164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055503845214844

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084495544433594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from medicine where  name = 'ALCAFT' and office_id= '1' 
 Execution Time:0.000823974609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002802848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002802848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002802848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 642 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 730 
 Execution Time:0.00024890899658203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 730  and `patient_registration_id` = 642 
 Execution Time:0.00064587593078613

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 642 
 Execution Time:0.0016160011291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select * from examination where examination_id= '652' and   office_id= '1' 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 652 
 Execution Time:0.00072097778320312

select * from examination_chargesdetails where  examination_id= '652' 
 Execution Time:0.00053095817565918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='114' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0050709247589111

select count(*) as cnt from patient_registration where  patient_registration_id= '627' and  office_id= '1' 
 Execution Time:0.00097489356994629

select count(*) as cnt from patient_registration where  patient_registration_id= '627' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=627  
 Execution Time:0.0049829483032227

select count(*) as cnt from patient_registration where  patient_registration_id= '627' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=627  
 Execution Time:0.0049829483032227

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=627  
 Execution Time:0.0016078948974609

select count(*) as cnt from patient_registration where  patient_registration_id= '627' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=627  
 Execution Time:0.0049829483032227

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=627  
 Execution Time:0.0016078948974609

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='627' and  office_id= '1' 
 Execution Time:0.00028181076049805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_appointment where  patient_registration_id = 627 and appointment_date= '2022-03-25' 
 Execution Time:0.00073504447937012

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00028300285339355

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079917907714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079917907714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079917907714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 731 
 Execution Time:0.00028705596923828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 731  and `patient_registration_id` = 627 
 Execution Time:0.00080013275146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083684921264648

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083684921264648

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 732 
 Execution Time:0.00054192543029785

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 732  and `patient_registration_id` = 643 
 Execution Time:0.00046610832214355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083184242248535

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083184242248535

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00050902366638184

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030789375305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030789375305176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037491321563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030789375305176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037491321563721

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027968883514404

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00068807601928711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 731 
 Execution Time:0.00064706802368164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 731  and `patient_registration_id` = 627 
 Execution Time:0.00033378601074219

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 627 
 Execution Time:0.0033600330352783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030088424682617

select * from examination where examination_id= '653' and   office_id= '1' 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 653 
 Execution Time:0.013080835342407

select * from examination_chargesdetails where  examination_id= '653' 
 Execution Time:0.0028159618377686

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028748512268066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028748512268066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.012983083724976

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 644 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 733 
 Execution Time:0.00017619132995605

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 733  and `patient_registration_id` = 644 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082302093505859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082302093505859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00092315673828125

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010128021240234

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.002500057220459

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.004241943359375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from medicine where  name = 'DOXY 100' and office_id= '1' 
 Execution Time:0.00078010559082031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 627 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 731 
 Execution Time:0.00032401084899902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 731  and `patient_registration_id` = 627 
 Execution Time:0.00060200691223145

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 627 
 Execution Time:0.0015180110931396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023529529571533

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023529529571533

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060391426086426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060391426086426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select * from examination where examination_id= '653' and   office_id= '1' 
 Execution Time:0.00090503692626953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 653 
 Execution Time:0.00036406517028809

select * from examination_chargesdetails where  examination_id= '653' 
 Execution Time:0.00057387351989746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='115' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033018589019775

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033018589019775

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030930042266846

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 645 
 Execution Time:0.00043201446533203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 734 
 Execution Time:0.00032305717468262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 734  and `patient_registration_id` = 645 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0014638900756836

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select count(*) as cnt from medicine where  name = 'OPTIVIRAL' and office_id= '1' 
 Execution Time:0.00056314468383789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012211799621582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012211799621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012211799621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00087285041809082

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 732 
 Execution Time:0.0004889965057373

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 732  and `patient_registration_id` = 643 
 Execution Time:0.00043702125549316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 643 
 Execution Time:0.001777172088623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select * from examination where examination_id= '654' and   office_id= '1' 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 654 
 Execution Time:0.00066208839416504

select * from examination_chargesdetails where  examination_id= '654' 
 Execution Time:0.00049400329589844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001183032989502

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001183032989502

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071001052856445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='100' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010969638824463

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from medicine where  name = 'OCUPOL' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from medicine where  name = 'OCUPOL' and office_id= '1' 
 Execution Time:0.00052785873413086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.0012118816375732

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 732 
 Execution Time:0.00038480758666992

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 732  and `patient_registration_id` = 643 
 Execution Time:0.00071907043457031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 643 
 Execution Time:0.0018689632415771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select * from examination where examination_id= '654' and   office_id= '1' 
 Execution Time:0.0014569759368896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 654 
 Execution Time:0.00047898292541504

select * from examination_chargesdetails where  examination_id= '654' 
 Execution Time:0.0005650520324707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.005418062210083

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.005418062210083

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 646 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 735 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 735  and `patient_registration_id` = 646 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012994050979614

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049178600311279

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012994050979614

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049178600311279

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012994050979614

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049178600311279

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 645 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 734 
 Execution Time:0.00024819374084473

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 734  and `patient_registration_id` = 645 
 Execution Time:0.00039911270141602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 645 
 Execution Time:0.0015518665313721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024449825286865

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024449825286865

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076484680175781

select * from examination where examination_id= '656' and   office_id= '1' 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 656 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '656' 
 Execution Time:0.00056195259094238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098395347595215

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098395347595215

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012340545654297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091314315795898

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078988075256348

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080299377441406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 644 
 Execution Time:0.00035214424133301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 733 
 Execution Time:0.00033211708068848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 733  and `patient_registration_id` = 644 
 Execution Time:0.00037217140197754

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 644 
 Execution Time:0.0018520355224609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select * from examination where examination_id= '655' and   office_id= '1' 
 Execution Time:0.00076699256896973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 655 
 Execution Time:0.0001680850982666

select * from examination_chargesdetails where  examination_id= '655' 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076818466186523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076818466186523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010361671447754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057315826416016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057315826416016

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075793266296387

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011420249938965

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 646 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 735 
 Execution Time:0.00032305717468262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 735  and `patient_registration_id` = 646 
 Execution Time:0.00042009353637695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 646 
 Execution Time:0.0014259815216064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from examination where examination_id= '657' and   office_id= '1' 
 Execution Time:0.00099301338195801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 657 
 Execution Time:0.00030088424682617

select * from examination_chargesdetails where  examination_id= '657' 
 Execution Time:0.0004270076751709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014491081237793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014491081237793

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005948543548584

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014100074768066

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='105' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057792663574219

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0042028427124023

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00067996978759766

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 732 
 Execution Time:0.00046801567077637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 732  and `patient_registration_id` = 643 
 Execution Time:0.00050497055053711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 643 
 Execution Time:0.0020170211791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from examination where examination_id= '654' and   office_id= '1' 
 Execution Time:0.0011258125305176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 654 
 Execution Time:0.00061798095703125

select * from examination_chargesdetails where  examination_id= '654' 
 Execution Time:0.00055098533630371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091791152954102

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059795379638672

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014421939849854

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015549659729004

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015549659729004

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0019180774688721

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0010039806365967

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0010039806365967

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0015518665313721

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0008389949798584

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0008389949798584

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0081501007080078

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.00040388107299805

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=436  
 Execution Time:0.032651901245117

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.00040388107299805

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=436  
 Execution Time:0.032651901245117

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=436  
 Execution Time:0.002126932144165

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.00040388107299805

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=436  
 Execution Time:0.032651901245117

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=436  
 Execution Time:0.002126932144165

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='436' and  office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078892707824707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078892707824707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029819011688232

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018711090087891

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018711090087891

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014071464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.04579496383667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020833015441895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.04579496383667

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012538433074951

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012538433074951

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001162052154541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016329288482666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016329288482666

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065529346466064

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065529346466064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012661933898926

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065529346466064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012661933898926

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019807815551758

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0065529346466064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012661933898926

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019807815551758

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 648 
 Execution Time:0.00069403648376465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 737 
 Execution Time:0.00040817260742188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 737  and `patient_registration_id` = 648 
 Execution Time:0.012862920761108

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025560855865479

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058150291442871

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058150291442871

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027570724487305

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027570724487305

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 648 
 Execution Time:0.0010240077972412

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 737 
 Execution Time:0.0016579627990723

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 737  and `patient_registration_id` = 648 
 Execution Time:0.00099802017211914

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 648 
 Execution Time:0.0019869804382324

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018670558929443

select * from examination where examination_id= '658' and   office_id= '1' 
 Execution Time:0.0046148300170898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 658 
 Execution Time:0.0034480094909668

select * from examination_chargesdetails where  examination_id= '658' 
 Execution Time:0.003960132598877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013070106506348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013070106506348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021791458129883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011100769042969

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019080638885498

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088381767272949

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00088405609130859

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00088405609130859

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=573  
 Execution Time:0.010316133499146

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00088405609130859

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=573  
 Execution Time:0.010316133499146

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=573  
 Execution Time:0.0044310092926025

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00088405609130859

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=573  
 Execution Time:0.010316133499146

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=573  
 Execution Time:0.0044310092926025

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='573' and  office_id= '1' 
 Execution Time:0.0020790100097656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047087669372559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from patient_appointment where  patient_registration_id = 573 and appointment_date= '2022-03-25' 
 Execution Time:0.00071287155151367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026798248291016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-25' and  '2022-03-25' and  billing_master.office_id= 1        
 Execution Time:0.0078229904174805

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-25' and  '2022-03-25' and  billing_master.office_id= 1        
 Execution Time:0.0078229904174805

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
		where billing=0 and appointment_date between  '2022-03-25' and '2022-03-25' and  patient_registration.office_id= 1      
 Execution Time:0.0054750442504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016071796417236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016071796417236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016071796417236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 573 
 Execution Time:0.00056791305541992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 738 
 Execution Time:0.00038790702819824

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 738  and `patient_registration_id` = 573 
 Execution Time:0.003864049911499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.010718107223511

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.010718107223511

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 647 
 Execution Time:0.00068020820617676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 736 
 Execution Time:0.00044083595275879

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 736  and `patient_registration_id` = 647 
 Execution Time:0.0011839866638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018899440765381

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018899440765381

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021708011627197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020148754119873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019600391387939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001615047454834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021708011627197

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051188468933105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018551349639893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018551349639893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011777877807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011820793151855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018551349639893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009918212890625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009918212890625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 649 
 Execution Time:0.00063085556030273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 739 
 Execution Time:0.0012969970703125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 739  and `patient_registration_id` = 649 
 Execution Time:0.00077700614929199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013751983642578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012001991271973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012001991271973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045180320739746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 573 
 Execution Time:0.00045680999755859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 738 
 Execution Time:0.0005040168762207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 738  and `patient_registration_id` = 573 
 Execution Time:0.00024700164794922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 573 
 Execution Time:0.0014669895172119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select * from examination where examination_id= '659' and   office_id= '1' 
 Execution Time:0.0014438629150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 659 
 Execution Time:0.035999774932861

select * from examination_chargesdetails where  examination_id= '659' 
 Execution Time:0.010946989059448

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043082237243652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0083000659942627

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0083000659942627

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062417984008789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 647 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 736 
 Execution Time:0.00027990341186523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 736  and `patient_registration_id` = 647 
 Execution Time:0.00039887428283691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 647 
 Execution Time:0.0014991760253906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select * from examination where examination_id= '660' and   office_id= '1' 
 Execution Time:0.0012269020080566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 660 
 Execution Time:0.00027704238891602

select * from examination_chargesdetails where  examination_id= '660' 
 Execution Time:0.00044488906860352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062394142150879

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062394142150879

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 649 
 Execution Time:0.00052285194396973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 739 
 Execution Time:0.00029182434082031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 739  and `patient_registration_id` = 649 
 Execution Time:0.00021600723266602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 649 
 Execution Time:0.0010750293731689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081205368041992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081205368041992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select * from examination where examination_id= '661' and   office_id= '1' 
 Execution Time:0.00079512596130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 661 
 Execution Time:0.0002138614654541

select * from examination_chargesdetails where  examination_id= '661' 
 Execution Time:0.00027918815612793

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.012714147567749

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012681484222412

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012681484222412

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012209415435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012209415435791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012121200561523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068402290344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012209415435791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 650 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 740 
 Execution Time:0.0004420280456543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 740  and `patient_registration_id` = 650 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012710094451904

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012710094451904

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 650 
 Execution Time:0.00040411949157715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 740 
 Execution Time:0.00050806999206543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 740  and `patient_registration_id` = 650 
 Execution Time:0.00052309036254883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 650 
 Execution Time:0.0014758110046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select * from examination where examination_id= '662' and   office_id= '1' 
 Execution Time:0.0015149116516113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 662 
 Execution Time:0.0012202262878418

select * from examination_chargesdetails where  examination_id= '662' 
 Execution Time:0.0013320446014404

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007479190826416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007479190826416

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015008449554443

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015008449554443

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016019344329834

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='112' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0017180442810059

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059700012207031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 573 
 Execution Time:0.00068020820617676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 738 
 Execution Time:0.00037598609924316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 738  and `patient_registration_id` = 573 
 Execution Time:0.00061202049255371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 573 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0042009353637695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0042009353637695

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033168792724609

select * from examination where examination_id= '659' and   office_id= '1' 
 Execution Time:0.0022180080413818

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 659 
 Execution Time:0.0020840167999268

select * from examination_chargesdetails where  examination_id= '659' 
 Execution Time:0.002223014831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012931823730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012931823730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012931823730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015051364898682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012931823730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015051364898682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023407936096191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014398097991943

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010988712310791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012931823730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015051364898682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

